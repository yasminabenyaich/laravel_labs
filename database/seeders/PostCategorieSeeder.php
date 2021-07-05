<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pivot_table_post_categorie')->insert([
            [
                'post_id' => 1,
                'categorie_id' => 2,
            ],
            [
                'post_id' => 1,
                'categorie_id' => 6,
            ],
            [
                'post_id' => 2,
                'categorie_id' => 2,
            ],
            [
                'post_id' => 2,
                'categorie_id' => 1,
            ],
            [
                'post_id' => 3,
                'categorie_id' => 2,
            ],
            [
                'post_id' => 3,
                'categorie_id' => 5,
            ], [
                'post_id' => 4,
                'categorie_id' => 4,
            ], [
                'post_id' => 4,
                'categorie_id' => 3,
            ], [
                'post_id' => 4,
                'categorie_id' => 2,
            ], [
                'post_id' => 1,
                'categorie_id' => 3,
            ], [
                'post_id' => 2,
                'categorie_id' => 5,
            ]
        ]);
    }
}
