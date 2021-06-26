<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titres")->insert([
            'title'=> 'Get in (the Lab)and discover the world',
        ]);
        DB::table("titres")->insert([
            'title'=> 'Get in (the Lab)and discover the world',
        ]);
        DB::table("titres")->insert([
            'title'=> 'Get in (the Lab)and discover the world',
        ]);
        DB::table("titres")->insert([
            'title'=> 'Get in (the Lab)and discover the world',
        ]);
    }
}
