<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert(
            [
                [
                    "icone_id" => 23,
                    "h2" => "Get in the lab",
                    "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                ],
                [
                    "icone_id" => 11,
                    "h2" => "Projects online",
                    "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                ],
                [
                    
                    "icone_id" => 37,
                    "h2" => "SMART MARKETING",
                    "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                ],
                [
                    "icone_id" => 2,
                    "h2" => "Discovering",
                    "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                ],
                [
                    "icone_id" => 19,
                    "h2" => "Working together",
                    "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                ],
                [
                    
                    "icone_id" => 16,
                    "h2" => "HELLO YOU",
                    "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                ],
                // [
                    
                //     "icone_id" => 18,
                //     "h2" => "HELLO YOU",
                //     "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                // ],
                // [
                    
                //     "icone_id" => 20,
                //     "h2" => "HELLO YOU",
                //     "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                // ],
            ]
        ); 
    }
}