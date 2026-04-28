<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  $fruit = ["Apple",
          "Banana",
          "Cherry"
          ];  
  
        
          echo $fruit[0]."<br>";
          echo $fruit[1]."<br>"; 
          echo $fruit[2]."<br>"; 
          
          //Unset deletes an element in an array
          
          unset($fruit[1]);

          //Splice: Deletes arrays from a certain index

          array_splice($fruit,0,1);
          echo $fruit[0],"<br>";
          print_r($fruit); 

          //push add a new element at the end

          array_push($fruit,"mango"); // $fruits[] = "mango"
        //   print_r($fruit);  
          
          //Adding a new element in an array

          array_splice($fruit,1,0,"Berry");//Replace fruits[1]
          print_r($fruit);
          
          
    ?>
</body>
</html>