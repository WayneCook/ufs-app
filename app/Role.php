<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Permission;


class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];



      /**
     * App\User relationship
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class,'permissions_users');

    }

    public function permissions() {
        return $this->belongsToMany(Permission::class,'permissions_roles');
     }

    public function hasPermission($slug) {

        return $this->permissions->contains('slug', $slug );

    }

    public function getAllRoles() {

        return $this->permissions->contains('slug', $slug );

    }






}
