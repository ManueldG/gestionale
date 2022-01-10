<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::insert([

            'name' => 'Manuel',
            'email' => 'manuel@gmail.com',
            'password' => '123456'

        ]);
    }
}
