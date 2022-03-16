<?php

/*

To play hide-and-seek, we have been asked for a program that counts to 10. But the person who will count is a bit of a cheat and
 will do so by counting by twos. Create a function that counts to 10, 2 by 2, showing each number of the count on the screen.

*/


function count_by_2() {

for ($counter = 2; $counter <= 10; $counter += 2) {

echo $counter . "<br />";

}

}

count_by_2();

?>

