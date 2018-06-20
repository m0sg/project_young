<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(AdvantageTableSeeder::class);
        $this->call(ProductTableSeeder::class);

    }
}
