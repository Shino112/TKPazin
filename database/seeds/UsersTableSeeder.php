<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        
        DB::table('users')->insert(
            [
                [
                    'name' => "Luka Otočan",
                    'email' => "kadumi54@gmail.com",
                    'password' => bcrypt('Shino112!!')
                ],
                [
                    'name' => "Filip Baša",
                    'email' => "fbasa@gmail.com",
                    'password' => bcrypt('System19')
                ],
            ]
            );
    }
}
