<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(HeadlineSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
