<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_types')->insert([
            'name' => 'Валюта'
        ]);

        DB::table('service_types')->insert([
            'name' => 'Лот'
        ]);
    }
}
