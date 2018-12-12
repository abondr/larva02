<?php

use Illuminate\Database\Seeder;

class BearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $dengerValues = ['gntl', 'timid', 'shy', 'agr','crezy',
        'vlnt','klr'];
        $bearTypes = ['Polar','Black','Grizzly'];
        for($i=0; $i<=100; $i++){ 
            DB::table('bears')
            ->insert([
                'name'=>$faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'type'=> $bearTypes[rand(0,2)],
                'danger_level'=> $dengerValues[rand(0,6)],
                'created_at' => $faker->dateTime,
                'updated_at'=> $faker->dateTime
            ]);
        }
    }
}
