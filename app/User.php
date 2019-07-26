<?php

namespace App;

use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use CyrildeWit\EloquentViewable\Viewable;
use App\Traits\HasPermissionsTrait;


class User extends Authenticatable implements ViewableContract
{
    use Viewable;
    use Notifiable;
    use HasPermissionsTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }


    public function scopeIsNotSuperAdmin($query)
    {
        return $query->whereDoesntHave('roles', function($query){

            $query->where('slug', '=', 'super-admin' );
        });
    }

}
