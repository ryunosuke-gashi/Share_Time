<?php

use Illuminate\Database\Seeder;

class UnivsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('univs')->insert([
           
            ['univ_name' => '日本大学',],
            
           
           
            
            
            ]);
    }
}
