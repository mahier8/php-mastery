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
        function calcConeVolume($radius, $height) {
            // pow($radius, 2) how to do to the power of, rather than times times
            $volume = $radius * $radius * pi() * $height * (1/3);
            echo 'the cone volume with a radius of ' . ($radius * $radius) . ' and a height of ' . $height . ' is : ' . $volume . '  cm<sup>3</sup><br />';


        }

        return calcConeVolume(5, 2);

    ?>
</body>
</html>

<!-- Maries code 
function coneVol($rad, $height, $round = null) {
                    $volume = pow($rad,2) * pi() * $height * (1/3);
                    // how to add round in
                    if($round){
                        $volume = round($volume, $round);
                    }
                    return $volume;
                }

                $volume = 5 * 5 * 3.14 * 2 * (1/3);
                echo 'the cone volume with a radius of 5 and a height of 2 is : ' . $volume . '  cm<sup>3</sup><br />';
                $volume = 3 * 3 * 3.14 * 4 * (1/3);
                echo 'the cone volume with a radius of 3 and a height of 4 is $volume ' . $volume . ' cm<sup>3</sup><br />';
                $volume = coneVol(5,2);
                echo 'the cone volume with a radius of 5 and a height of 2 is : ' . $volume . '  cm<sup>3</sup><br />';
                $volume = coneVol(3,4,2);
                echo 'the cone volume with a radius of 3 and a height of 4 is $volume ' . $volume . ' cm<sup>3</sup><br />'; -->