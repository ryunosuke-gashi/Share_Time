<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id'=> 1,
            'food' => '学会',
            'meet_place' => '講堂前',
            'time' => '4限終わり'
        ]);
    }
}
