<?php

namespace Database\Seeders;

use App\Models\AboutContent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TitreSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(IconeSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(NavbarSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(CarousselItemSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(AboutContentSeeder::class);
        $this->call(ServiceFeatureSeeder::class);
        $this->call(CardImgSeeder::class);

    }
}
