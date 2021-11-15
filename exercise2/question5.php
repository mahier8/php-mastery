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
        $coordinates = array (
            array (
                'x' => 1,
                'y' => 4,
                'z' => 6
            ),
            array (
                'x' => 4,
                'y' => 8,
                'z' => 0
            ),
            array (
                'x' => 6,
                'y' => 56,
                'z' => 12
            ),
            array (
                'x' => 12,
                'y' => 23,
                'z' => 3
            ),
            array (
                'x' => 15,
                'y' => 8,
                'z' => 67
            ),
            array (
                'x' => 2,
                'y' => 4,
                'z' => 2
            ),
            array (
                'x' => 3,
                'y' => 9,
                'z' => 8
            ),
            array (
                'x' => 7,
                'y' => 12,
                'z' => 32
            ),
            array (
                'x' => 3,
                'y' => 9,
                'z' => 8
            ),
            array (
                'x' => 2,
                'y' => 0,
                'z' => 5
            ),
        );

        // original method
        foreach($coordinates as $key => $coordinate) {
            // print_r($coordinate);
                echo '[x] value is ' . $coordinate['x'] . '<br />';
                echo '[y] value is ' . $coordinate['y'] . '<br />';
                echo '[z] value is ' . $coordinate['z'] . '<br />';


            // echo  "The axis is equals to $coordinate '<br />'";
            // echo "The color at the index $position is $color ";
        }

        // For each
        
        // foreach($coordinates as $key => $coordinate)
        // {
        //     echo '[' . $key . '] value is ' . $coordinate . '<br />';
        // }
 
    ?>
</body>
</html>