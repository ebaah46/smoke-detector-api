<?php

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create random seeder to be inserted into DB

        \App\Data::create([
            'data'=> 189
        ]);
    }
}
