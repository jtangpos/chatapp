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
        //
        DB::table('users')->insert([
            [
                'username' => 'Nami',
                'password' => Hash::make('secret'),
            ],
            [
                'username' => 'Luffy',
                'password' => Hash::make('secret'),
            ]
        ]);
    }
}
