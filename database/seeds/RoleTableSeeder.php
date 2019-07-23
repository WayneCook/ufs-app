<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner_permission = Permission::where('slug','edit-users')->first();
        $admin_permission = Permission::where('slug', 'edit-messages')->first();

        $dev_role = new Role();
        $dev_role->slug = 'owner';
        $dev_role->name = 'Owner';
        $dev_role->save();
        $dev_role->permissions()->attach($owner_permission);

        $admin_role = new Role();
        $admin_role->slug = 'admin';
        $admin_role->name = 'Administrator';
        $admin_role->save();
        $admin_role->permissions()->attach($admin_permission);

        $member_role = new Role();
        $member_role->slug = 'member';
        $member_role->name = 'Member';
        $member_role->save();

    }
}
