<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 100px;
        text-align: left;
        font-weight: bold;
      }
    </style>


    <title>EX3 NIVEL2</title>
</head>
<body>


<!--

Imagine we are in a store where it is sold

Chocolate: 1 euro
Chewing gum: 0.50 euros
Carmels: 1.50 euros
Implement a program that allows you to add calculations to a total of such purchases. For example, if we buy:

2 chocolates, 1 chewing gum and 1 caramel, we have a program that allows you to add the subtotals to a total, 
such as:

function (2 chocolates) + function (1 chewing gum) + function (1 caramel) = 2 + 0.5 + 1.5

Being therefore the total, 4.

-->



   
<h2>Candy shop</h2>
    
    <h3>Enter the amount of yours purchases:</h3>
    <form action ="" method ="POST">
       
        <label>Chocolate:</label><input type="number" name="choc" value="" ><br />
        <label>Chewing gum:</label><input type="number" name="chew" value="" ><br />
        <label>Caramel:</label><input type="number" name="caram" value="" ><br />

        <input type="submit" value="Submit" name="submit">

        </form>



<?php
            $eur;
            $cents;

            function total_price ($type, $amount) {
              $price = 1;


              
              $total = $amount * $price;

              return $total;
            }



            
        
            if (isset($_POST['submit'])) {
                $choc = $_POST['choc'];
                $chew = $_POST['chew'];
                $caram = $_POST['caram'];
               
                $price = call_price($call);
                $cents = $price % 100;
                $eur = ($price - $cents) / 100;

            }

             
 ?>


    </body>
    </html>
