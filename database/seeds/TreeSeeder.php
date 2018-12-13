<?php

use Illuminate\Database\Seeder;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Bear::chunk(50,function($bears){
            $faker = \Faker\Factory::create();
            foreach($bears as $bear){
                DB::table('trees')
            ->insert([
                'bear_id' => $bear->id,
                'type'=> $faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'age'=>$faker->numberBetween(1,150),
                'created_at' => $faker->dateTime,
                'updated_at'=> $faker->dateTime
            ]);
            }
        });
    }
}
