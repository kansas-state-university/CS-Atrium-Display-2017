<?php

/*$db = new mysqli(DBHOST, DBUSER, DBPASS, DATABASE, '3306');
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
*/


    date_default_timezone_set('America/Chicago');
    $startDate = strtotime("31 Mar 2017 11:00:00"); //when you want to start the RNG

    for($x = 0; $x < 10; $x++)
    {
        $rng = mt_rand() / mt_getrandmax();
        $lambda = 2.5; //per hr

        $dur = -(log(1 - $rng) / $lambda);

        $dur = $dur * 3600; //how many seconds are in an hour

        $dur += $startDate;

        $formatted = date("d-m-Y h:i:s", $dur);
        echo $formatted;
        echo "\n";

        $startDate = $dur;
        //echo $time;
    }



?>
