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
        // $pollution = 90;

        // if ($pollution == 0) {
        //     echo "No pollution";
        // }
        // elseif ($pollution == 20) {
        //     echo "No pollution";
        // }
        // elseif ($pollution == 50) {
        //     echo "No pollution";
        // }
        // elseif ($pollution == 90) {
        //     echo 'Little pollution → wear a mask'; 
        // }
        // elseif ($pollution == 110) {
        //     echo 'Medium pollution → wear a mask'; 
        // }
        // elseif ($pollution == 140) {
        //     echo 'Medium pollution → wear a mask'; 
        // }
        // elseif ($pollution == 180) {
        //     echo 'High pollution →  wear a mask and no activities outside'; 
        // }
        // elseif ($pollution == 210) {
        //     echo 'High pollution →  wear a mask and no activities outside'; 
        // }
        // elseif ($pollution == 250) {
        //     echo 'High pollution →  wear a mask and no activities outside'; 
        // } else {
        //     echo 'no data entries – Do want you want !';
        // }
    ?>


    <?php
    $pollution = 90;
    switch ($pollution)
    {
        case 0:
            echo "No pollution";
        break;
        
        case 20:
            echo "No pollution";    
        break;
        
        case 50:
            echo "Little pollution";
        break;

        case 90:
            echo "Little pollution → wear a mask";
        break;
        
        case 110:
            echo "Medium pollution → wear a mask";
        break;

        case 140:
            echo "Medium pollution → wear a mask";    
        break;
        
        case 180:
            echo "High pollution →  wear a mask and no activities outside";    
        break;

        case 210:
            echo "Very High pollution → stay at home !";    
        break;

        case 250:
            echo "Very High pollution → stay at home !";    
        break;

        default:
            echo "no data entries – Do want you want !";    
    }
    ?>


</body>
</html>