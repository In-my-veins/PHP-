<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 $students = [
    ["Kabanda", 14, 90],
    ["Uwera", 16, 86],
    ["Ndagijimana", 15, 87],
    ["Alice", 17, 92],
    ["John", 13, 78]
];
foreach($students as $row){
    if($row[2] >= 80 ){
        echo $row[0]. " : PASS";
    }
    else {
        echo $row[0]." : FAIL";
    }
    echo "<br>";
} 

foreach($students as $row){
    if(($row[1] >= 15) && $row[2] >= 88){
        echo $row[0]. " is a high perfomer student";
        echo "<br>";
    }    
}

$sum = 0;
$count = 0;
foreach($students as $row){
  $sum += $row[2];
  $count ++;
}

$average = $sum/$count;
$number = 0;

foreach($students as $row){
if($row[2] >= $average){
$number ++;
}
}
echo "The average marks is: ".$average ."<br>";
echo "The number of students above average is ". $number."<br>";

for($i = 0; $i < count($students); $i++){
    for($j = 0; $j < count($students[$i]); $j++){
        echo $students[$i][$j] . " ";
    }
    echo "<br>";
}
    ?>
</body>
</html>