<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (products::count()  == 0){
            products::create([
                'image' => '600x400.jpg',
                'name' => 'Фарматан порошок',
                'alias' => 'farmatan-poroshok',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text..',
            ]);
            products::create([
                'image' => '600x400.jpg',
                'name' => 'Интра Аэрозоль',
                'alias' => 'intra-aerozol',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text..',
            ]);
            products::create([
                'image' => '600x400.jpg',
                'name' => 'Репидерма Спрей',
                'alias' => 'repiderma-sprej',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text..',
            ]);
            products::create([
                'image' => '600x400.jpg',
                'name' => 'Фарматан Гель',
                'alias' => 'farmatan-gel',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text..',
            ]);
            products::create([
                'image' => '600x400.jpg',
                'name' => 'Витровит',
                'alias' => 'vitrovit',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text..',
            ]);


        }
    }
}
