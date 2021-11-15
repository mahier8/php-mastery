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
        $password = "banana";
        if($password == "banana") {
            echo "you have the good password ". $password ."you can enter";
        }
        else {
            echo "Wrong password, you can't enter";
        }

        echo ($password == "banana") ? "you have the good password ". $password ."you can enter" : "Wrong password, you can't enter";

        // $age = 24;
        // if ($age >= 18)
        // {
        //     $adult = true;
        // }
        // else
        // {
        //     $adult = false;
        // }
        // $age = 24;

        // $adult = ($age >= 18) ? true : false;
    ?>
</body>
</html>