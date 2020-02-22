<?php

use Illuminate\Database\Seeder;
use App\Recipes;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('recipes')->insert([
        'user_id' => $faker->numberBetween(1, 20),
     ]);
    }
}
