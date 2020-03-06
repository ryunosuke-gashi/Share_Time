<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Article::create([
                'user_id'    => $i,
                'food'       => 'ピザ' .$i,
                'meet_place'       => '講堂前' .$i,
                'time'       => '今' .$i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }  
    }
}
