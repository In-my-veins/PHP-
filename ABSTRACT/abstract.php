<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>
<body>

<?php 

require "class.php";

$buyProduct = new Product(
    1,
    "Phone",
    200,
    5,
    "Smartphone"
);

echo $buyProduct->getSummary();
echo "<br>";
echo "Total Value: " . $buyProduct->getTotalValue();
echo "<br>";
echo $buyProduct->isAvailable();

?>

</body>
</html>