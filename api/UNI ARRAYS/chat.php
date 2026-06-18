<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  $colors = ["Red", "Blue","Green","Yellow"];
  echo $colors[0]."<br>";
   echo $colors[1]."<br>";
    echo $colors[2]."<br>"; 
     echo $colors[3]."<br>"; 

     $colors[1] = "Purple";
     echo $colors[1]."<br>";

     for($i = 0; $i < count($colors); $i++){
        echo $colors[$i]."<br>";
     }


     $movie[0] = "Shaolin soccer";
     $movie[1] = "Karate kid";
     $movie[2] = "Kobla kai";
     $movie[5] = "Kungfu master";
     echo $movie[4]."<br>";
     echo $movie[3]."<br>";

     for($i = 0; $i < count($movie);$i++){
        echo $movie[i]."<br>";
     }

    ?>
</body>
</html>