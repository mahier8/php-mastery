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
        // $dayofweek = date('w', strtotime($date));

        // echo $str = str_shuffle($str);
        echo date("l") . "<br>"; 
        echo date("l jS \of F Y h:i:s A") . "<br>";
        echo date('l \t\h\e jS') . "<br>";
        echo date('F d, Y g:i a') . "<br>";
        echo date("m.d.y") . "<br>";
        echo date("j, n, Y") . "<br>";
        echo date("Ymd") . "<br>";
        echo date("D M j G:i:s T Y") . "<br>";
        echo date('H:m:s \m \i\s\ \m\o\n\t\h')  . "<br>";
        echo date('H:i:s') . "<br>";
        echo date("Y-m-d H:i:s") . "<br>";

        // '\i\t \i\s \t\h\e jS \d\a\y.'
    ?>
</body>
</html>