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

Imagine that we want it to count up to a number other than 10.
 Schedule the function for the end of the account to be parameterized.


*/


function count_by_2($param) {

    for ($counter = 2; $counter <= $param; $counter += 2) {
    echo $counter . "<br />";
    
    }
    
    }
 
?>

    <h2>Count by 2 to given value</h2>

    <form action ="" method ="POST">
        Enter an integer value: <input type="number" name="value" value="">
        <input type="submit" value="submit" name="submit">
        </form>

<?php
   

   if (isset($_POST['submit'])) {

    $param = $_POST['value'];
    count_by_2($param);

    }


?>


    </body>
    </html>