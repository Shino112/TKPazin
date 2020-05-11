<?php

use Illuminate\Database\Seeder;

class NastupTurnirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nastup_turnirs')->truncate();

        DB::table('nastup_turnirs')->insert(
            [
                [
                    'turnir_pojedinacni_id' => 1,
                    'igrac_id' => 1,
                    'bodovi' => 20
                ],
                [
                    'turnir_pojedinacni_id' => 2,
                    'igrac_id' => 1,
                    'bodovi' => 10
                ],
                [
                    'turnir_pojedinacni_id' => 3,
                    'igrac_id' => 2,
                    'bodovi' => 20
                ],
                [
                    'turnir_pojedinacni_id' => 4,
                    'igrac_id' => 2,
                    'bodovi' => 20
                ],
                [
                    'turnir_pojedinacni_id' => 1,
                    'igrac_id' => 3,
                    'bodovi' => 30
                ],
                [
                    'turnir_pojedinacni_id' => 2,
                    'igrac_id' => 3,
                    'bodovi' => 50
                ],
                [
                    'turnir_pojedinacni_id' => 3,
                    'igrac_id' => 4,
                    'bodovi' => 40
                ],
                [
                    'turnir_pojedinacni_id' => 4,
                    'igrac_id' => 4,
                    'bodovi' => 60
                ],
                [
                    'turnir_pojedinacni_id' => 1,
                    'igrac_id' => 5,
                    'bodovi' => 70
                ],
                [
                    'turnir_pojedinacni_id' => 2,
                    'igrac_id' => 5,
                    'bodovi' => 90
                ],
                [
                    'turnir_pojedinacni_id' => 3,
                    'igrac_id' => 6,
                    'bodovi' => 80
                ],
                [
                    'turnir_pojedinacni_id' => 4,
                    'igrac_id' => 6,
                    'bodovi' => 100
                ],
            ]
        );
    }
}
