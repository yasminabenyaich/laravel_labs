<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Service_featureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_features')->insert(
        [
            [
                "img"=>'img/device.png',
                "icone_id"=>23,
                "h3"=>"Get in the lab",
                "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
                 id, suscipit id nulla..",
                 "btn"=>'browse',
            ],
            // [
            //     "icone_id"=>25,
            //     "h3"=>"Project Online",
            //     "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
            //      id, suscipit id nulla..",
                 
            // ],
            // [
            //     "icone_id"=>27,
            //     "h3"=>"SMART MARKETING",
            //     "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
            //      id, suscipit id nulla..",
                 
            // ],
            // [
            //     "icone_id"=>29,
            //     "h3"=>"GET IN LAB",
            //     "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
            //      id, suscipit id nulla..",
               
            // ],
            // [
            //     "icone_id"=>24,
            //     "h3"=>"project online",
            //     "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
            //      id, suscipit id nulla..",
            // ],
            // [
            //     "icone_id"=>18,
            //     "h3"=>"SMART MARKETING",
            //     "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum
            //      id, suscipit id nulla..",
            // ],
   
        ]);
    }
}
