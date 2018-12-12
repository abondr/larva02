<?php

use Illuminate\Database\Seeder;

class CaveSeeder extends Seeder
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
                DB::table('caves')
            ->insert([
                'bear_id' => $bear->id,
                'location'=> $faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'created_at' => $faker->dateTime,
                'updated_at'=> $faker->dateTime
            ]);
            }
        });
    }
}
