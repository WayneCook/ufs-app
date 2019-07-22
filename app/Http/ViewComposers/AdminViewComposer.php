<?php

namespace App\Http\ViewComposers;
use Illuminate\Support\Facades\DB;


class AdminViewComposer
{
    public function compose($view)
    {
        $admin = [];

        // Get totals
        $admin['totals'] = DB::select("SELECT (SELECT COUNT(*) FROM users) as users, (SELECT COUNT(*) FROM messages) as messages")[0];


        if(!empty($messages = DB::select("SELECT * FROM messages"))){
            $admin['messages'] = $messages[0];
        }

        return $view->with('admin', $admin);

    }
}
