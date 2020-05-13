<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        //$this->call(PostTableSeeder::class);
        //$this->call(AlbumTableSeeder::class);
        //$this->call(SlikeTableSeeder::class);
        //$this->call(IgracTableSeeder::class);
        //$this->call(SezonaTableSeeder::class);
        //$this->call(TurnirPiramidaTableSeeder::class);
        //$this->call(TurnirPojedinacniTableSeeder::class);
        //$this->call(NastupPiramidaTableSeeder::class);
        //$this->call(NastupTurnirTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
