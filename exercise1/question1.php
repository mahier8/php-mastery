<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
    
    <?php
    $my_age = 10;
    $name = "Marie";
    $country = "Korea";
    $isWoman = true;
    
    if ($my_age > 3) {
        echo "You are really young... just only {$my_age} years old. ";
    }
    else {
        echo 'it\'s okay you can continue on this web page $name'; 
    };
    
    if ($name == "Marie" AND $country == "Korea") {
        echo "Welcome to " .$country. ' ' .$name;
    }
    
    if(!$isWoman OR $name != "Marie" ) {
        echo "You are a dude"; 
    };
    ?>
</body>
</html>