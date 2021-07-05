<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "role_id"=>1,
            "pdp"=>"1.jpg",
            "name"=>"Williams",
            "firstname"=>"Christinne",
            "description"=>"Admin",
            "email"=>"christinne.w@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>2,
            "pdp"=>"1.jpg",
            "name"=>"Benyaich",
            "firstname"=>"Yasmina",
            "description"=>"WebMaster",
            "email"=>"yasmina.b@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>3,
            "pdp"=>"2.jpg",
            "name"=>"Williams",
            "firstname"=>"Axel",
            "description"=>"Rédacteur",
            "email"=>"axelwilliams@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>4,
            "pdp"=>"3.jpg",
            "name"=>"Mahad",
            "firstname" => "Liban",
            "description"=>"Membre",
            "email"=>"Mahad.l@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

    }
}
