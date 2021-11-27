<?php
// if(!empty($_COOKIE)){
//    $name = !empty($_COOKIE['name']) ? $_COOKIE['name'] : "nothing";
//     $age = isset($_COOKIE['age']) ? $_COOKIE['age'] : "nothing";
//     $height = isset($_COOKIE['height']) ? $_COOKIE['height'] : "nothing"; 
// }
// if(!empty($_GET)) {
//     $name = !empty($_GET['name']) ? $_GET['name'] : "nothing";
//     $age = isset($_GET['age']) ? $_GET['age'] : "nothing";
//     $height = isset($_GET['height']) ? $_GET['height'] : "nothing";
// } else {
//     $name = '';
//     $age = '';
//     $height = '';
// }

if(!empty($_POST)) {
    $name = !empty($_POST['name']) ? $_POST['name'] : "nothing";
    $age = isset($_POST['age']) ? $_POST['age'] : "nothing";
    $height = isset($_POST['height']) ? $_POST['height'] : "nothing";
}
// $_SESSION['username'] = $name;

// print_r($_SESSION); 

// setcookie("username", $name, time()+365*24*3600,null,null,false,true);
// setcookie("age", $age, time()+365*24*3600,null,null,false,true);
// setcookie("height", $height, time()+365*24*3600,null,null,false,true);
?>
    <h1>Hello and welcome on <?php echo $name;?>'s page</h1>
    <div>Name : <?php echo $name;?></div>
    <div>Age : <?php echo $age;?></div>
    <div>Height : <?php echo $height;?></div>
