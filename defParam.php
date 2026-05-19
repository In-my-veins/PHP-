
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
function greet($name = "Guest"){
    echo "Hello, $name!"."<br>";
}   
greet();
greet("Mucyo"); 

function params($a = 5,$b = 10){
    echo $a + $b."<br>";
}
params();
params(10);
params(6,9);
    ?>
</body>
</html>