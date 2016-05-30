<?php

use Illuminate\Database\Seeder;
use Modules\Admin\Entities\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A normal user';
        $role_user->save();

        $role_admin = new Role();
        $role_user->name = 'admin';
        $role_user->description = 'An admin user';
        $role_user->save();


    }
}
