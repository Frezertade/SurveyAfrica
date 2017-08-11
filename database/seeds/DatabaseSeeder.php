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
         $this->call(default_categories::class);

        $this->call(userTableSeeder::class);

        $this->call(defaultDataSeeder::class);
    }
}
