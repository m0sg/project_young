<?php

use Illuminate\Database\Seeder;
use App\Sliders;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (sliders::count()  == 0){
            sliders::create([

                'image' => '1600x1000',
                'name' => 'Фарматан порошок',
                'alias' => 'farmatan-poroshok',
                'title' => 'Эффективное средство устранения диареи',
            ]);
            sliders::create([

                'image' => '1600x1000',
                'name' => 'Интра Аэрозоль',
                'alias' => 'intra-aerozol',
                'title' => 'Эффективное средство против респираторных заболеваний',
            ]);
            sliders::create([

                'image' => '1600x1000',
                'name' => 'Репидерма Спрей',
                'alias' => 'repiderma-sprej',
                'title' => 'Эффективное средство против инфекций',
            ]);
            sliders::create([

                'image' => '1600x1000',
                'name' => 'Фарматан Гель',
                'alias' => 'farmatan-gel',
                'title' => 'Эффективное средство устранения диареи',
            ]);
            sliders::create([

                'image' => '1600x1000',
                'name' => 'Витровит',
                'alias' => 'vitrovit',
                'title' => 'Эффективное средство повышающее иммунитет',
            ]);


        }
    }
}


