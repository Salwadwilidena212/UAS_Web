<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'image' => 'images/no-image.jpeg',
        ]);

        Feature::create([
            'image' => 'images/no-image.jpeg',
        ]);
    }
}
