<?php

use Illuminate\Database\Seeder;
use App\Advantages;

class AdvantageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (advantages::count()  == 0){
            advantages::create([
                'icon' => '1600x1000',
                'name' => '100%',
                'text' => 'Уменьшение падежа телят до 100%',
            ]);
            advantages::create([
                'icon' => '1600x1000',
                'name' => '850',
                'text' => 'Средний привес телят 8520 г/сутки',
            ]);
            advantages::create([
                'icon' => '1600x1000',
                'name' => '100%',
                'text' => 'Повышенный иммунитет',
            ]);


        }
    }
}
