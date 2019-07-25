<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;

class Permission extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];


    public function roles() {
        return $this->belongsToMany(Role::class,'permissions_roles');
     }

     public function users() {
        return $this->belongsToMany(User::class,'permissions_users');
     }

}
