<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

/* 
Schedule a function that, given any number (for example, your age) tells us whether 
it is even or odd by a message on the screen.
*/


$to_print = " is even!";

/* 
function pre_r($array) {

    echo '<pre>';
    print_r($array);
    echo '</pre>';

}
*/

function numcheck ($number) {
   
$checker = true;

if ($number % 2 != 0) {

    $checker = false;
}

return $checker;

}


// pre_r($_POST);

?>


<h2>Even and odd checker form</h2>

    <form action ="" method ="POST">
        Enter an integer value: <input type="number" name="value" value="">
        <input type="submit" value="submit" name="submit">
        </form>


<?php

if (isset($_POST['submit'])) {
    $number = $_POST['value'];
    $checker = numcheck ($number);

    if (!$checker) {
    
        $to_print = " is odd!";
    
    }
    echo "<br />$number <b>$to_print</b><br />";
    }



?>



</body>
</html>