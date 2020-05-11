<?php

use Illuminate\Database\Seeder;

class SlikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slikas')->truncate();

        DB::table('slikas')->insert(
            [
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0649.JPG",
                    'album_id' => 1
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0650.JPG",
                    'album_id' => 2
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0651.JPG",
                    'album_id' => 1
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0656.JPG",
                    'album_id' => 2
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0659.JPG",
                    'album_id' => 1
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0662.JPG",
                    'album_id' => 2
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0666.JPG",
                    'album_id' => 1
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0663.JPG",
                    'album_id' => 2
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0665.JPG",
                    'album_id' => 1
                ],
                [
                    'naslov' => NULL,
                    'putanja' => "/img/testne_slike/0672.JPG",
                    'album_id' => 2
                ],
            ]
            );
    }
}
