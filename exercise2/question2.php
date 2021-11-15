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
        $group1 = array (
            'language' => 'French',
            'day_class' => 'Monday',
            'is_already_started' => true,
            'number of students' => 15);
        
        echo $group1['language'];
        
        // or
        $group2['language']= 'English';
        $group2['day_class'] = 'Monday';
        $group2['is_already_started'] = false;
        $group2['nb_of_students'] = 8;
        
        echo $group2['is_already_started'];
    ?>
</body>
</html>