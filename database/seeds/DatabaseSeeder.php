<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BearsSeeder::class);
        $this->call(CaveSeeder::class);
        $this->call(TreeSeeder::class);
        $this->call(FishesSeeder::class);
        $this->call(PicnicSeeder::class);
    }
}
