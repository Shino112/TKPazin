<?php

use Illuminate\Database\Seeder;

class TurnirPojedinacniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turnir_pojedinacnis')->truncate();

        DB::table('turnir_pojedinacnis')->insert(
            [
                [
                    'naziv' => "4. mjesec",
                    'sezona_id' => 1,
                    'zdrijeb' => "text"
                ],
                [
                    'naziv' => "3. mjesec",
                    'sezona_id' => 1,
                    'zdrijeb' => "text"
                ],
                [
                    'naziv' => "5. mjesec",
                    'sezona_id' => 2,
                    'zdrijeb' => "text"
                ],
                [
                    'naziv' => "6. mjesec",
                    'sezona_id' => 2,
                    'zdrijeb' => "text"
                ],
            ]
        );
    }
}
