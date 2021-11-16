<?php
$search = isset($_GET['search']) ? $_GET['search'] : ""; 
    // echo file_get_contents("towns.txt")
    $data = file_get_contents("towns.txt");

    // Now I have a array
    $test = unserialize($data);
    // print_r($test);

    // echo count($test);
    // my question is, what to do with my array

    // soliution 1
    for ($i = 0; $i < count($test); $i++)
{
    // what would i do here, I dont just want to display names, I want to find them by searching
    echo $test[$i] . '<br />'; 
    
    // stripos
    
}
?>


