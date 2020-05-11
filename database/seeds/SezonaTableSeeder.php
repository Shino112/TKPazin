<?php

use Illuminate\Database\Seeder;

class SezonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sezonas')->truncate();
        
        DB::table('sezonas')->insert(
            [
                [
                    'godina' => 2019
                ],
                [
                    'godina' => 2018
                ],
            ]
        );
    }
}
