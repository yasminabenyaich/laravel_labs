<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cardImgs')->insert(
            [
                [
                  "img"=>'img/card-1.jpg',
                  "h2"=>'GET IN THE LAB',
                  "p"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                   suscipit id nulla..',
                ],
                [
                  "img"=>'img/card-2.jpg',
                  "h2"=>'PROJET ONLINE',
                  "p"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                   suscipit id nulla..',
                ],
                [
                  "img"=>'img/card-3.jpg',
                  "h2"=>'SMART MARKETING',
                  "p"=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                   suscipit id nulla..',
                ],
  
              ]);
    }
}
