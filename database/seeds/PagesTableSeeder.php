<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_role = new Page();
        $super_admin_role->slug = 'home';
        $super_admin_role->name = 'Home';
        $super_admin_role->save();
    }
}
