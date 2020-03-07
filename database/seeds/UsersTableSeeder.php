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
           [
            'univ_id' =>1,
            'name' => "higashi",
            'email' => 'higashi@gmail.com',
            'password' => bcrypt('secret'),
            'introduction' => 'こんにちは',
        ],
        [
            'univ_id' =>2,
            'name' => "ryunosuke",
            'email' => 'ryunosuke@gmail.com',
            'password' => bcrypt('secret'),
            'introduction' => 'こんにちは',
            
        ],
            ]);
    }
}
