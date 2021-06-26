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
            "name"=>"Williams",
            "firstname"=>"Christinne",
            "description"=>"PROJECT MANAGER",
            "email"=>"christinne.w@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>2,
            "name"=>"Benyaich",
            "firstname"=>"Yasmina",
            "description"=>"DEV JUNIOR",
            "email"=>"yasmina.b@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>3,
            "name"=>"Williams",
            "firstname"=>"Axel",
            "description"=>"Digital Designer",
            "email"=>"axelwilliams@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>4,
            "name"=>"Mahad",
            "firstname" => "Liban",
            "description"=>"Membre",
            "email"=>"Mahad.l@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

    }
}
