<?php

namespace Database\Seeders;

use App\Models\Headline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Headline::create([
            'title' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, facilis.",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolore dicta iste, eos quibusdam asperiores molestias ab magni praesentium repellat, a cum voluptatem. Autem eaque natus reiciendis. Fuga, libero quam dolorum maiores voluptate doloribus ipsum! Nemo aspernatur error recusandae blanditiis soluta in, quasi unde repudiandae. Omnis ad consequatur nesciunt quia expedita, quos aliquid, neque maxime aut placeat eaque ullam. Velit, quaerat reiciendis voluptates id in sunt ipsa repellendus eaque quos doloribus vero a magni veritatis placeat cupiditate molestias porro recusandae excepturi deleniti nam corrupti quo temporibus. Consectetur praesentium minima ipsam cumque, quasi saepe nobis provident amet explicabo blanditiis. Nam, tempora.",
            'image' => 'images/no-image.jpeg',
        ]);
    }
}
