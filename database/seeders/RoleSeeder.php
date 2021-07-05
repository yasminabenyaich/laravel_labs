<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "role"=>"Admin",
        ]);
        DB::table("roles")->insert([
            "role"=>"web Master",
        ]);
        DB::table("roles")->insert([
            "role"=>"Redacteur",
        ]);
        DB::table("roles")->insert([
            "role"=>"Membre",
        ]);
    }
}
