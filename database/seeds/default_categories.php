<?php

use Illuminate\Database\Seeder;

class default_categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('catagories')->insert([
            'category_name' => 'Demographic',
        ]);
        DB::table('catagories')->insert([
            'category_name' => 'Economic',
        ]);
        DB::table('catagories')->insert([
            'category_name' => 'Political',
        ]);
        DB::table('catagories')->insert([
            'category_name' => 'Value',
        ]);

    }
}
