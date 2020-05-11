<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->truncate();

        DB::table('albums')->insert(
            [
                [
                    'naslov' => "Masters 2019",
                    'slika_albuma' => "/img/slike_albuma/vijesti.jpg"
                ],
                [
                    'naslov' => "Masters 2018",
                    'slika_albuma' => "/img/slike_albuma/vijesti.jpg"
                ],
                [
                    'naslov' => "Masters 2017",
                    'slika_albuma' => "/img/slike_albuma/vijesti.jpg"
                ],
                [
                    'naslov' => "Masters 2016",
                    'slika_albuma' => "/img/slike_albuma/vijesti.jpg"
                ],
                [
                    'naslov' => "Masters 2015",
                    'slika_albuma' => "/img/slike_albuma/vijesti.jpg"
                ],
                [
                    'naslov' => "Masters 2014",
                    'slika_albuma' => "/img/slike_albuma/vijesti.jpg"
                ],
            ]
            );
    }
}
