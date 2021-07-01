<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("promos")->insert([

            "h2"=>"Are you ready to stand out?",
            "p"=>"Lorem ipsum dolor sit amet consectetur adipiscing elit Curabitur leo est",
            "btn"=>"browse",
        ]);
    }
}
