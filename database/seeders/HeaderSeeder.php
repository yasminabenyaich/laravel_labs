<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert(
            [
                [
                    "h1" => "Service",
                    "link1" => "/",
                    "link2" => "/services",
                ],
                [
                    "h1" => "Blog",
                    "link1" => "/",
                    "link2" => "/blog",
                ],
                
                [
                    "h1" => "Contact",
                    "link1" => "/",
                    "link2" => "/contact",
                ],
            ]
        );
        }
    }