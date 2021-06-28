<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            [
                "h2"=>'Contact us',
                "p"=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. 
                Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
                "adress"=>'C Libertad 305200 Arévalo',
                "phone"=>'0034 37483 2445 322',
                "mail"=>'hello@company.com',
                "position"=>'Avenue Julien Hanssens '
            ],
            
            ]);
    }
}
