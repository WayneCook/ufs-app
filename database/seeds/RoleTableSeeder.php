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
        $super_admin_permissions = Permission::pluck('id')->toArray();

        $super_admin_role = new Role();
        $super_admin_role->slug = 'super-admin';
        $super_admin_role->name = 'Super Admin';
        $super_admin_role->save();
        $super_admin_role->permissions()->sync($super_admin_permissions);

        $admin_role = new Role();
        $admin_role->slug = 'admin';
        $admin_role->name = 'Admin';
        $admin_role->save();

        $member_role = new Role();
        $member_role->slug = 'member';
        $member_role->name = 'Member';
        $member_role->save();

    }
}
