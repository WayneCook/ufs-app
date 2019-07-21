<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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

        $admin = [];

        // Get totals
        $admin['totals'] = DB::select("SELECT (SELECT COUNT(*) FROM users) as users,
                                     (SELECT COUNT(*) FROM messages) as messages")[0];

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) use ($admin) {

            $event->menu->add('MAIN NAVIGATION',[
                'text' => 'Dashboard',
                'url'  => 'admin/dashboard',
                'icon' => 'dashboard',
            ],
            [
                'text'        => 'Messages',
                'url'         => 'admin/messages',
                'icon'        => 'envelope',
                'label'       => $admin['totals']->messages,
                'label_color' => 'success',
            ],
            [
                'text'        => 'Users',
                'url'         => 'admin/users',
                'icon'        => 'user'
            ],
            'ACCOUNT SETTINGS',
            [
                'text' => 'Profile',
                'url'  => 'admin/settings',
                'icon' => 'user',
            ],
            [
                'text' => 'Change Password',
                'url'  => 'admin/settings',
                'icon' => 'lock',
            ],
            [
                'text'    => 'Multilevel',
                'icon'    => 'share',
                'submenu' => [
                    [
                        'text' => 'Level One',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'Level One',
                        'url'     => '#',
                        'submenu' => [
                            [
                                'text' => 'Level Two',
                                'url'  => '#',
                            ],
                            [
                                'text'    => 'Level Two',
                                'url'     => '#',
                                'submenu' => [
                                    [
                                        'text' => 'Level Three',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Level Three',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'text' => 'Level One',
                        'url'  => '#',
                    ],
                ],
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

