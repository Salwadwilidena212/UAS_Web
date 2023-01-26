<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Oreo',
            'description' => 'Ini adalah oreo',
            'price' => 5000,
            'rating' => 2.1,
            'image' => 'images/no-image.jpeg',
        ]);
    }
}
