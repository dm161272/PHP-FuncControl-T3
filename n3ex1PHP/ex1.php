<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      label {
        display: inline-block;
        width: 160px;
        text-align: left;
        font-weight: bold;
      }
    </style>


    <title>EX3 NIVEL2</title>
</head>
<body>


<!--

Eratosthenes sieve is an algorithm designed to find prime numbers within a given range.
 Based on the attached link information, it implements the Eratosthenes screen within a 
 function, so that we can invoke the function for a specific number.


-->


<h2>Eratosthenes sieve</h2>
    
    <form action ="" method ="POST">
       
        <label>Enter the range limit:</label><input type="number" name="limit" value="0" ><br />

        <input type="submit" value="Submit" name="submit">

        </form>

<?php
            


                  
              function ers($limit)
              {
                  $sieve = [];
                  for($i = 2; $i <= $limit; $i++) {
                      $sieve[$i - 2] = $i;
                  } 
              
                  for ($i = 2; $i * $i <= $limit; $i++) { 

                      if(isset($sieve[$i - 1])) {
  
                          for ($k = $i -1; $k * $i <= $limit; $k++) {
                                     
                              unset($sieve[$k * $i]);
                          
                          }   
                      }
              
                  }           
                  return $sieve;
              }
                  
                      if (isset($_POST['submit'])) {
                          $limit = $_POST['limit'];
                          $to_print = ers($limit);

                          echo "<br \>Prime numbers of range: ";

                          foreach(ers($limit) as $print) {

                          echo $print  . " ";
                          }
                        
                      }

             
 ?>


    </body>
    </html>
