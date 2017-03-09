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
        $startDate = strtotime("31 Mar 2017 11:00:00"); //when you want to start the RNG

        for($x = 0; $x < 10; $x++)
        {
            $rng = mt_rand() / mt_getrandmax();
            $lambda = 2.5; //per hr

            $dur = -(log(1 - $rng) / $lambda);

            $dur = $dur * 3600; //how many seconds are in an hour

            $dur += $startDate;

            $formatted = date("Y-m-d h:i:s", $dur);

            DB::table('numbers')->insert([
              'time' => $formatted
        	]);


            $startDate = $dur;
            //echo $time;
        }
    }
}
