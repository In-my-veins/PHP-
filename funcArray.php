
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

function average($numbers){
    $sum = array_sum($numbers);
    $count = count($numbers);
    $average = $sum/$count;
    return $average;
 }

 $final = average([10,23,43,23]);
 echo $final."<br>";    


    ?>
</body>
</html>