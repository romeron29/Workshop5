<?php 
include ('script.php');
$countries = showCountries();
$temperatures = showtTemperatures();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop5</title>
</head>
<body>
    <?php $countries?>
    <?php $temperatures?>

    
</body>
</html>