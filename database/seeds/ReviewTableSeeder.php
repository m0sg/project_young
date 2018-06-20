<?php

use Illuminate\Database\Seeder;
use App\Reviews;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (reviews::count()  == 0){
            reviews::create([
                'name' => 'FIO 1',
                'company' => 'Company 1',
                'images' => '100x100.jpg',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);
            reviews::create([
                'name' => 'FIO 2',
                'company' => 'Company 2',
                'images' => '100x100.jpg',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);
            reviews::create([
                'name' => 'FIO 3',
                'company' => 'Company 3',
                'images' => '100x100.jpg',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
            ]);

        }
    }
}
