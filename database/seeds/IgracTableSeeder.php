<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IgracTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('igracs')->truncate();

        $date = Carbon::create(2020, 3, 1 , 9);

        DB::table('igracs')->insert(
            [
                [
                    'ime' => "Luka",
                    'prezime' => "Otočan",
                    'prebivaliste' => "Poreč",
                    'igra' => "lijevom rukom",
                    'clanstvo' => 2018,
                    'created_at' => $date,
                    'updated_at' => $date

                ],
                [
                    'ime' => "Filip",
                    'prezime' => "Baša",
                    'prebivaliste' => "Bašići",
                    'igra' => "desnom rukom",
                    'clanstvo' => 2017,
                    'created_at' => $date,
                    'updated_at' => $date

                ],
                [
                    'ime' => "Vedran",
                    'prezime' => "Koraca",
                    'prebivaliste' => "Šipraki",
                    'igra' => "desnom rukom",
                    'clanstvo' => 2016,
                    'created_at' => $date,
                    'updated_at' => $date

                ],
                [
                    'ime' => "Stefano",
                    'prezime' => "Matković",
                    'prebivaliste' => "Gračišće",
                    'igra' => "desnom rukom",
                    'clanstvo' => 2019,
                    'created_at' => $date,
                    'updated_at' => $date

                ],
                [
                    'ime' => "Luka",
                    'prezime' => "Milohanić",
                    'prebivaliste' => "Mala Traba",
                    'igra' => "lijevom rukom",
                    'clanstvo' => 2015,
                    'created_at' => $date,
                    'updated_at' => $date

                ],
                [
                    'ime' => "Alen",
                    'prezime' => "Bakša",
                    'prebivaliste' => "Pazin",
                    'igra' => "desnom rukom",
                    'clanstvo' => 2010,
                    'created_at' => $date,
                    'updated_at' => $date

                ],
            ]
            );
    }
}
