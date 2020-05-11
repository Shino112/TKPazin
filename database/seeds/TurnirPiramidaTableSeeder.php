<?php

use Illuminate\Database\Seeder;

class TurnirPiramidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turnir_piramidas')->truncate();

        DB::table('turnir_piramidas')->insert(
            [
                [
                    'naziv' => "4. mjesec",
                    'sezona_id' => 1
                ],
                [
                    'naziv' => "3. mjesec",
                    'sezona_id' => 1
                ],
                [
                    'naziv' => "5. mjesec",
                    'sezona_id' => 2
                ],
                [
                    'naziv' => "6. mjesec",
                    'sezona_id' => 2
                ],
            ]
        );
    }
}
