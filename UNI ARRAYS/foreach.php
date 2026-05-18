<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 $colors = ["red","green","blue","black","grey"];
 foreach($colors as $color){
    echo $color."<br>";
 } 
 $color = array("Amit","Raj","Dhiraj","Shyma");
 echo "The array has " . count($color) . " elements"."<br>";

 $elements = count($colors);
 echo "The array has ". $elements." elements"."<br>";
    ?>
</body>
</html>