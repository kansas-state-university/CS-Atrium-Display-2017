<?php

use Illuminate\Database\Seeder;

class RandomTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Chicago');
        $startDate = 1491062400; //when you want to start the RNG

        for($x = 0; $x < 6; $x++)
        {
            $rng = mt_rand() / mt_getrandmax();
            $lambda = 1.5; //per hr

            $dur = -(log(1 - $rng) / $lambda);

            $dur = $dur * 3600; //how many seconds are in an hour

            $dur += $startDate;



            DB::table('numbers')->insert([
              'time' => $dur
        	]);


            $startDate = $dur;
            //echo $time;
        }

        DB::table('numbers')->insert([
            'time' => 2147483647
        ]);
    }
}
