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
                'icon' => 'fa fa-arrow-down',
                'name' => '100%',
                'text' => 'Уменьшение падежа телят до 100%',
            ]);
            advantages::create([
                'icon' => 'fa fa-balance-scale',
                'name' => '850',
                'text' => 'Средний привес телят 850 г/сутки',
            ]);
            advantages::create([
                'icon' => 'fa fa-heart',
                'name' => '100%',
                'text' => '100% Повышенный иммунитет',
            ]);


        }
    }
}
