<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 $age = [
    "Mucyo" => 16,
    "John" => 17,
    "Chris" => 15,
    "Manzi" => 13,
 ];   
 echo "Mucyo's age is ". $age['Mucyo']."<br>";
 foreach($age as $name =>$value){
    echo "Name = ".$name. ", age = ".$value. "<br>";
 }
    ?>
</body>
</html>