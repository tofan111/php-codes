
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic syntax</title>
</head>
<body>
    
<?php
//for loop basics
   for($i=1;$i<11;$i++){
       echo $i.".<br>";
   }
//array basics
   $student = array(
    'Ashish' => 63,
    'Ashutosh'=> 64,
    'Gupta' => 69
   );
//printing array
   foreach($student as $value){
       echo $value;
   }
   echo "<br>Gupta's roll no: ".$student['Gupta'];
   //How to print array with key and value pair.
   




?>
</body>
</html> 


