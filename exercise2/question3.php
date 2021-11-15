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
        

        for ($i = 0; $i < count($colours); $i++) {
            $position = array_search($colours[$i], $colours);
            echo "The color at the index $position is $colours[$i] '<br/>'";
        }

    // array_search
// $fruits = array ('Banana', 'Apple', 'Pear', 'Cherry', 'Strawberry', 'Raspberry');

// $position = array_search('Strawberry', $fruits);
// echo '"Strawberry" is in position ' . $position . '<br />';

// $position = array_search('Banana', $fruits);
// echo '"Banana" is in position ' . $position;

    // For loop
// we create our array $firstnames
// $firstnames = array ('Francois', 'Michel', 'Nicole', 'Veronique', 'Benoit');

// // Then we do the loop in order to display everything :
// for ($i = 0; $i < count($firstnames); $i++)
// {
//     echo $firstnames[$i] . '<br />'; // we display $firstnames[0], $firstnames[1] etc.
// }

// blue	red	pink	green	white	orange	black	purple	yellow	grey

    ?>
</body>
</html>