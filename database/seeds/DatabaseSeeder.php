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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cpfcnpj' => '111111111',
            'birthday' => gmdate('Y-m-d H:i:s'),
            'phone' => '00030231032',
        ]);
    }
}
