<?php

use Illuminate\Database\Seeder;

class PicnicSeeder extends Seeder
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
        for($i=0; $i<=25; $i++){ 
            DB::table('picnics')
            ->insert([
                'name'=>$faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'location'=> $faker->sentence(
                    $nbWords = 2,
                    $variableNbWords = true
                ),
                'taste_level'=> $faker->numberBetween(1,20),
                'created_at' => $faker->dateTime,
                'updated_at'=> $faker->dateTime
            ]);
        }
        \App\Bear::chunk(50,function($bears){
            $faker = \Faker\Factory::create();
            $picnics = \App\Picnic::all();
            $pidArr = []; $counter = 0;
            foreach($picnics as $pic){
                $pidArr[] = $pic->id;
                $counter++;
            }
            foreach($bears as $bear){
                DB::table('bears_picnic')
                ->insert([
                    'bear_id'=>$bear->id,
                    'picnic_id' => $pidArr[rand(0,$counter-1)],
                    'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
                ]);
            }
        });
    }
}
