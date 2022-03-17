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

To prevent omissions using our wonderful "hidden" option we will set
a default parameter equal to 10 in the function that is responsible for making this account.

*/


function count_by_2($param = 10) {

    for ($counter = 2; $counter <= $param; $counter += 2) {
    echo $counter . "<br />";
    
    }
    
    }
 
?>

    <h2>Count by 2 to given value (10 is default)</h2>

    <h3>Count with default value:</h3>
   
   <?php count_by_2(); ?>

   <br />
    <form action ="" method ="POST" style="font-weight: bold;">
        Enter an integer value: <input type="number" name="value" value="">
        <input type="submit" value="Submit" name="submit" style="font-weight: bold;">
        </form>

<?php

   if (isset($_POST['submit'])) {

    $param = $_POST['value'];
    echo "<br />";
    count_by_2($param);

    }


?>


    </body>
    </html>