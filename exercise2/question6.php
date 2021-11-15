<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- test if 2 or 12 indices exists -->

    <?php
        $colours = array ('blue', 'red pink', 'green', 'white', 'orange', 'black', 'purple', 'yellow', 'grey');

        if (array_key_exists('green', $colours)) {
            echo 'Yes "green" exists';
        }

        // checking if a key exists within an array
        // if (array_key_exists('name', $coordinates))
        // {
        //     echo 'The key "name" is in the array coordinates !';
        // }

        // if (array_key_exists('country', $coordinates))
        // {
        //     echo 'The key "country isn\'t in the array coordinates !';
        // }
    ?>
</body>
</html>