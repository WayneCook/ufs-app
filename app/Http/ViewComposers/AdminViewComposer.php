<?php

namespace App\Http\ViewComposers;
use Illuminate\Support\Facades\DB;
use App\Page;
use App\User;
use App\Message;


class AdminViewComposer
{
    public function compose($view)
    {
        $admin = [];

        // Get totals

        $admin['total_admin'] = User::isNotSuperAdmin()->whereHas(
            'roles', function($q){
                $q->where('slug', 'admin');
            }
        )->count();

        $admin['total_member'] = User::isNotSuperAdmin()->whereHas(
            'roles', function($q){
                $q->where('slug', 'member');
            }
        )->count();

        $admin['total_users'] = User::isNotSuperAdmin()->count();


        $admin['total_unread_messages'] = Message::where('read', false)->count();
        $admin['total_read_messages'] = Message::where('read', true)->count();

        $admin['total_home_page_views'] = views(Page::where('slug', 'home')->first())->count();


        return $view->with('admin', $admin);

    }
}
