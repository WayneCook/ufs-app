<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $owner_role = Role::where('slug','owner')->first();
        // $admin_role = Role::where('slug', 'admin')->first();
        // $owner_perm = Permission::where('slug','edit-users')->first();
        // $admin_perm = Permission::where('slug','edit-messages')->first();

        $developer = new User();
        $developer->name = 'Usama Muneer';
        $developer->email = 'usama@thewebtier.com';
        $developer->password = bcrypt('secret');
        $developer->save();
        // $developer->roles()->attach($owner_role);
        // $developer->permissions()->attach($owner_perm);


        $manager = new User();
        $manager->name = 'Asad Butt';
        $manager->email = 'asad@thewebtier.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        // $manager->roles()->attach($admin_role);
        // $manager->permissions()->attach($admin_perm);

    }
}
