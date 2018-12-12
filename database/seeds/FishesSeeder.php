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
                'bear_id' => $bear->id,
                'type'=> $faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'created_at' => $faker->dateTime,
                'updated_at'=> $faker->dateTime
            ]);
                }                
            }
        });
    }
}
