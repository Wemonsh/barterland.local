<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ServiceTypeTableSeeder::class);
        $this->call(GameTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(SelectTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
