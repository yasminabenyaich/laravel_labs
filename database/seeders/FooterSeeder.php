<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'texte' => '2021 Made with love by Yasmina', 
            'tlien' => 'Wakatime', 
            'lien' => 'https://wakatime.com/dashboard', 
        ]);
    }
}
