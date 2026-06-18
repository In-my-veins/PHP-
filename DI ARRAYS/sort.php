<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 $cars = ["Volvo","BMW","Toyota"];
 sort($cars); 
 
 foreach($cars as $car){
    echo $car."<br>";
 }
 for($i = 0; $i < count($cars); $i++){
    echo $cars[$i]."<br>";
 }

 //rsort: Descending Order
 //asort:associative arrays by value:ascending
 //arsort:Associative arrays by value:descending
 //ksort:associative array by key:ascending
 //krsort;associative by key;descending
    ?>
</body>
</html>