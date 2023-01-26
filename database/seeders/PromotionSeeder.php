<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::create([
            'name' => 'Biskuat',
            'description' => 'Ini adalalah biskuat',
            'price' => 10000,
            'image' => 'images/no-image.jpeg',
        ]);
    }
}
