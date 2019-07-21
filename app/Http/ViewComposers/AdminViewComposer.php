<?php

namespace App\Http\ViewComposers;
use Illuminate\Support\Facades\DB;


class AdminViewComposer
{
    public function compose($view)
    {
        $admin = [];

        // Get totals
        $admin['totals'] = DB::select("SELECT (SELECT COUNT(*) FROM users) as users,
                                     (SELECT COUNT(*) FROM messages) as messages")[0];

        $admin['messages'] = DB::select("SELECT * FROM messages")[0];

        return $view->with('admin', $admin);

    }
}
