<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 300px;
        text-align: left;
        font-weight: bold;
      }
    </style>


    <title>EX2 NIVEL2</title>
</head>
<body>


<!--

Write a function that determines the total amount to pay for a phone call according to the following premises:

Any call that lasts less than 3 minutes costs 10 cents.
Every extra minute from the first 3 is a counter step and costs 5 cents.

-->



   
<h2>Call counter</h2>
    
    <h3>Enter data below:</h3>
    <form action ="" method ="POST">
       
        <label>Enter call length in minutes:</label><input type="text" name="call" value="" ><br />
        <input type="submit" value="Submit" name="submit">

        </form>



<?php
            $eur;
            $cents;

            function call_price ($call) {
              $price = 10;
              if ($call > 3) {

                $price = ceil($call - 3) * 5 + $price;

              } 

              return $price;
            }

        
            if (isset($_POST['submit'])) {
                $call = $_POST['call'];
               
                $price = call_price($call);
                $cents = $price % 100;
                $eur = ($price - $cents) / 100;

              echo "<br \>For the call duration of: " . $call . " minutes, the price is: " . $eur . " Euros " . $cents . " cents.";

            }

             
 ?>


    </body>
    </html>
