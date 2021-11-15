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
        $colours = array ('blue', 'red pink', 'green', 'white', 'orange', 'black', 'purple', 'yellow', 'grey');

        foreach($colours as $color) {
            $position = array_search($color, $colours);
            echo "The color at the index $position is $color '<br />'";
        }

        // For each
        // echo "hello $name "; // we can also concatenate like this

        // $firstnames = array ('Francois', 'Michel', 'Nicole', 'Veronique', 'Benoit');

        // foreach($firstnames as $firstname)
        // {
        //     echo $firstname ; // we display $firstnames[0], $firstnames[1] etc.
        // }
    ?>
</body>
</html>