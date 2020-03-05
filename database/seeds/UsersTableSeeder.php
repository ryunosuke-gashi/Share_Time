<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "higashi",
            'email' => 'ryunosuke@gmail.com',
            'password' => bcrypt('secret'),
            'introduction' => 'こんにちは',
            'univ_id' =>1,
            ]);
    }
}
