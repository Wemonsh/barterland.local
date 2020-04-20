<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = new Role();
        $roleSuperAdmin->name = 'super_admin';
        $roleSuperAdmin->save();

        $roleAdmin = new Role();
        $roleAdmin->name = 'admin';
        $roleAdmin->save();

        $roleModerator = new Role();
        $roleModerator->name = 'moderator';
        $roleModerator->save();

        $roleUser = new Role();
        $roleUser->name = 'user';
        $roleUser->save();
    }
}
