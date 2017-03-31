<?php

use Illuminate\Database\Seeder;

class PlaceHoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('placeholders')->insert([
          'placeholder' => 0
        ]);
    }
}
