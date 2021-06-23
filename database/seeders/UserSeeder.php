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
            "name"=>"Christinne Williams",
            "email"=>"christinne.w@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>2,
            "name"=>"Yasmina Benyaich",
            "email"=>"yasmina.b@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>3,
            "name"=>"Axel Williams",
            "email"=>"axelwilliams@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>4,
            "name"=>"Mahad Liban",
            "email"=>"Mahad.l@outlook.be",
            "password"=>Hash::make("testtest")
        ]);

        DB::table("users")->insert([
            "role_id"=>2,
            "name"=>"Elias Liban",
            "email"=>"elias.l@outlook.be",
            "password"=>Hash::make("testtest")
        ]);
    }
}
