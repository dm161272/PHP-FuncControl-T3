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

Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.

Condicions

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.

Write a function to verify the grade of a student in according to the note.

Conditions

If the note is 60% or more, the grade should be First Division.
If the note is between 45% and 59%, the grade should be Second Division.
If the note is between 33% and 44%, the grade should be Third Division.
If the note is less than 33%, the student will disapprove.

*/

function grade_rate ($grade) {

$text = "First Division";

if ($grade < 33) {

$text = "Disapproved";

}

else if ($grade < 45) {

$text = "Third division";

}

else if ($grade < 60) {

    $text = "Second division";
    
}

return $text;

}

?>


<h2>Grade calculator</h2>

<br />
<form action ="" method ="POST" style="font-weight: bold;">
    Enter student´s rate: <input type="number" name="value" value="">
    <input type="submit" value="Submit" name="submit" style="font-weight: bold;">
    </form>



<?php

if (isset($_POST['submit'])) {

$grade = $_POST['value'];
echo "<br />";
echo "<b>Student grade: </b>" . grade_rate($grade);

}

?>


</body>
</html>
