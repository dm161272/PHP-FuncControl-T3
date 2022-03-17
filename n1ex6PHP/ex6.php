


<?php

/* 

Charlie bit my finger!

Charlie's gonna bite your finger exactly 50% of the time.

Write The isBitten () function that returns TRUE with 50% probability and FALSE otherwise.

Tip: the function rand () may be useful to you.

*/

$count = 0;

function isBitten() {

$bite = false;
$rnd = rand()&1;

if ( $rnd != 0) {

    $bite = true;

}
    return $bite;



}


for ($i = 0; $i <= 30; $i++) {

    $toPrint = "No bite!";
    $bite = isBitten();

    if ($bite) {

        $toPrint = "Bite!";
        $count++;
    }


echo "Try $i: $toPrint<br />";

}

echo "Number of bites: $count";

?>