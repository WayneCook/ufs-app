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
        $dev_role->name = 'owner';
        $dev_role->save();
        $dev_role->permissions()->attach($owner_permission);

        $manager_role = new Role();
        $manager_role->slug = 'admin';
        $manager_role->name = 'Administrator';
        $manager_role->save();
        $manager_role->permissions()->attach($admin_permission);
    }
}
