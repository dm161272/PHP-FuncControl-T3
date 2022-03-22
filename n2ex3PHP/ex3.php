<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 110px;
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
    
    <h3>Amount of yours purchase:</h3>
    <form action ="" method ="POST">
       
        <label>Chocolate:</label><input type="number" name="choc" value="1" ><br />
        <label>Chewing gum:</label><input type="number" name="chew" value="1" ><br />
        <label>Caramel:</label><input type="number" name="caram" value="1" ><br />

        <input type="submit" value="Submit" name="submit">

        </form>

<?php
            
            function total_price ($amount, $type = 1) {
             
              $price = 1;
              
              if ($type == 3) {
                $price = 1.5;
              }

              if ($type == 2) {
                $price = .5;
              }

              $total = $amount * $price;

              return $total;
            }



        
            if (isset($_POST['submit'])) {
                $choc = $_POST['choc'];
                $chew = $_POST['chew'];
                $caram = $_POST['caram'];
               
                $tch = total_price($choc);
                $tcw = total_price($chew, 2);
                $tcr = total_price($caram, 3);

                $total = $tch + $tcw + $tcr;

                echo "Total price of chocolate: " . $tch . "<br \>";
                echo "Total price of chewing gum: " . $tcw . "<br \>";
                echo "Total price of caramel: " . $tcr . "<br \>";
                echo "Total: " . $total; 


            }

             
 ?>


    </body>
    </html>
