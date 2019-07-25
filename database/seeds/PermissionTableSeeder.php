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
        $manageRoles = new Permission();
        $manageRoles->slug = 'manage-roles';
        $manageRoles->name = 'Manage Roles';
        $manageRoles->save();

        $managePermissions = new Permission();
        $managePermissions->slug = 'manage-permissions';
        $managePermissions->name = 'Manage Permissions';
        $managePermissions->save();
    }
}
