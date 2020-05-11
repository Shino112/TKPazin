<?php

use Illuminate\Database\Seeder;

class NastupPiramidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nastup_piramidas')->truncate();

        DB::table('nastup_piramidas')->insert(
            [
                [
                    'turnir_piramida_id' => 1,
                    'igrac_id' => 1,
                    'bodovi' => 20
                ],
                [
                    'turnir_piramida_id' => 2,
                    'igrac_id' => 1,
                    'bodovi' => 10
                ],
                [
                    'turnir_piramida_id' => 3,
                    'igrac_id' => 2,
                    'bodovi' => 20
                ],
                [
                    'turnir_piramida_id' => 4,
                    'igrac_id' => 2,
                    'bodovi' => 20
                ],
                [
                    'turnir_piramida_id' => 1,
                    'igrac_id' => 3,
                    'bodovi' => 30
                ],
                [
                    'turnir_piramida_id' => 2,
                    'igrac_id' => 3,
                    'bodovi' => 50
                ],
                [
                    'turnir_piramida_id' => 3,
                    'igrac_id' => 4,
                    'bodovi' => 40
                ],
                [
                    'turnir_piramida_id' => 4,
                    'igrac_id' => 4,
                    'bodovi' => 60
                ],
                [
                    'turnir_piramida_id' => 1,
                    'igrac_id' => 5,
                    'bodovi' => 70
                ],
                [
                    'turnir_piramida_id' => 2,
                    'igrac_id' => 5,
                    'bodovi' => 90
                ],
                [
                    'turnir_piramida_id' => 3,
                    'igrac_id' => 6,
                    'bodovi' => 80
                ],
                [
                    'turnir_piramida_id' => 4,
                    'igrac_id' => 6,
                    'bodovi' => 100
                ],
            ]
        );
    }
}
