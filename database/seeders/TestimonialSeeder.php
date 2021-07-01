<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        // DB::table('testimonials')->insert([
        //     "img"=>"test-man.png",
        // ]);
        DB::table('testimonials')->insert([
            [
                "p"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus possimus odit distinctio cupiditate, perferendis repellat. Tenetur voluptates dolores ipsa. Expedita perferendis debitis
                doloremque rem unde laboriosam distinctio ea repellendus vel quisquam!",
                "pdp"=>'01.jpg',
                "name"=>'Michael Smith',
                "job"=>'CEO Company',
            ],
            [
                "p"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus possimus odit distinctio cupiditate, perferendis repellat. Tenetur voluptates dolores ipsa. Expedita perferendis debitis
                 doloremque rem unde laboriosam distinctio ea repellendus vel quisquam!",
                 "pdp"=>'02.jpg',
                 "name"=>"John Larson",
                 "job"=>"Freelance"
            ],
            [
                "p"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus possimus odit distinctio cupiditate, perferendis repellat. Tenetur voluptates dolores ipsa. Expedita perferendis debitis
                 doloremque rem unde laboriosam distinctio ea repellendus vel quisquam!",
                 "pdp"=>'01.jpg',
                 "name"=>'>Michael Smith',
                 "job"=>'CEO Company',
            ],

            
        ]);
    }
}
