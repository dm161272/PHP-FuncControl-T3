<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>EX1 NIVEL2</title>
</head>
<body>


<!--
We have been asked for a list of all the years in which the Olympic Games took place from 1960 to 2016. 
Schedule a loop that calculates and displays on screen the Olympic years within the above range.
-->

   
<h2>Olympics years from 1960 to 2016</h2>
    

<?php

            $year_start = 1960;
            $year_end = 2016 ;

            for ($i = $year_start; $i <= $year_end; $i += 4) {

                echo $i . "<br \>";

            }

     
 ?>


    </body>
    </html>
