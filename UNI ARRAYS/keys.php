<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tasks = [
     "laundry" => "Daniel",
     "trash" => "Mucyo", 
     "vacuum" => "Paccy",
     "dishes" => "Bella"
     ];
    echo $tasks["laundry"]."<br>"; 
    
    //print_r Output full array:Associative array 

    print_r($tasks)."<br>";

    //count prints number of elements in the array
    echo count($tasks)."<br>";

    //sort arrange in ascending order,numerical order ...

    // sort($tasks);
    print_r($tasks)."<br>";
    
    $tasks["dusting"] = "Tara";
    print_r($tasks);  
    ?>
</body>
</html>