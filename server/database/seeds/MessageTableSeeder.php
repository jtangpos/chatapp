<?php

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert(
            [
                [
                    'user_id' => 1,
                    'message' => 'Hi Luffy',
                ],
                [
                    'user_id' => 2,
                    'message' => 'Olahh!!! Nami',
                ]
            ]
        );
    }
}
