<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$student = [
    ["Kabanda",14,90],
    ["Uwera",14,86],
    ["Ndagijimana",15,87],
    ["Alice",17,92]
];
echo $student[0][0]."<br>";
echo $student[1][2]."<br>";    

echo "<pre>";
print_r($student);

// foreach($student as $value){
//     foreach($value as $value2){
//         echo $value2 . " ";
//     }
//     echo "<br>";
//    }
foreach($student as $row){
        if($row[1] >= 15){
            echo $row[0]." is " .$row[1]. " years old";
        } 
        echo "<br>";
}

foreach($student as $row){
    if($row[2] > 88){
        echo $row[0]. " scored ".$row[2];
        echo "<br>";
    }    
}

    ?>
</body>
</html>