<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//function scope

//Accessing global variable

$x = 10;
function show(){
    global $x;
    echo $x;
}

show();


$y = 10;
function sho($num){
    echo $num;
}

sho($y);
    ?>
</body>
</html>