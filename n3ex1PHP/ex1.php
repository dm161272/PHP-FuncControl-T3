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
       
        <label>Enter the range limit:</label><input type="number" name="limit" value="" ><br />

        <input type="submit" value="Submit" name="submit">

        </form>

<?php
  
            function sieve ($limit) {
             
                $sqrt_limit = floor(sqrt($limit));
              
                $S = str_repeat("1", $limit+1);
                
                for($i=2; $i<=$sqrt_limit; $i++){
                        
                    if($S[$i]==="1"){
                        
                        for($j=$i*$i; $j<=$limit; $j+=$i){
                           
                            $S[$j]="0";
                            
                            }
                        }
                    }
                 

                    for ($i=2; $i < $limit; i++)
                    

                    return $S;
            }






        
            if (isset($_POST['submit'])) {
                $limit = $_POST['limit'];

                $S = sieve ($limit);
               

                echo "Prime numbers of range: " . $S . "<br \>";
              


            }

             
 ?>


    </body>
    </html>
