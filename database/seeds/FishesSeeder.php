<?php

use Illuminate\Database\Seeder;

class FishesSeeder extends Seeder
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
                for($i=0;$i<10;$i++){
                    DB::table('fish')
            ->insert([                
                'type'=> $faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'weight' => $faker->numberBetween(1,250),
                'bear_id' => $bear->id,
                'created_at' => $faker->dateTime,
                'updated_at'=> $faker->dateTime
            ]);
                }                
            }
        });
    }
}
