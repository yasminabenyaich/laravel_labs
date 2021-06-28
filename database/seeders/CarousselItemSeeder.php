<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarousselItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        DB::table('carousselItems')->insert([
            "img"=> "img/01.jpg",
        ]);
        DB::table('carousselItems')->insert([
            "img"=> "img/02.jpg",
           
        ]);
    }
}
