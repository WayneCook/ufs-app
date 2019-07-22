<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner_role = Role::where('slug','owner')->first();
        $admin_role = Role::where('slug', 'admin')->first();

        $createUsers = new Permission();
        $createUsers->slug = 'create-users';
        $createUsers->name = 'Create Users';
        $createUsers->save();
        $createUsers->roles()->attach($owner_role);

        $editUsers = new Permission();
        $editUsers->slug = 'edit-users';
        $editUsers->name = 'Edit Users';
        $editUsers->save();
        $editUsers->roles()->attach($owner_role);

        $editMessages = new Permission();
        $editMessages->slug = 'edit-messages';
        $editMessages->name = 'Edit Messages';
        $editMessages->save();
        $editMessages->roles()->attach($admin_role);
    }
}
