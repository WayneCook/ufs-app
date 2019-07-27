<?php

namespace App\Providers;

use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add('MAIN NAVIGATION',[
                'text' => 'Dashboard',
                'url'  => 'admin',
                'icon' => 'dashboard',
                'active' => ['admin']
            ],
            [
                'text'        => 'Messages',
                'url'         => 'admin/messages',
                'icon'        => 'envelope',
                'label_color' => 'success',
            ],
            [
                'text'        => 'Users',
                'url'         => 'admin/users',
                'icon'        => 'user'
            ],
            [
                'text'        => 'Roles',
                'url'         => 'admin/roles',
                'icon'        => 'user',
                'can'         => 'manage-roles'
            ],
            [
                'text'        => 'Permissions',
                'url'         => 'admin/permissions',
                'icon'        => 'user',
                'can'         => 'manage-permissions'

            ],
            'ACCOUNT SETTINGS',
            [
                'text' => 'Profile',
                'url'  => 'admin/profile',
                'icon' => 'user',
            ],
            [
                'text' => 'Change Password',
                'url'  => 'admin/password/change',
                'icon' => 'lock',
            ],
            'LABELS',
            [
                'text'       => 'Important',
                'icon_color' => 'red',
            ],
            [
                'text'       => 'Warning',
                'icon_color' => 'yellow',
            ],
            [
                'text'       => 'Information',
                'icon_color' => 'aqua',
            ]);

        });
    }
}

