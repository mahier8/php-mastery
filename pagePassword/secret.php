<?php 
// print_r($_POST); // this is just to show the array i am getting
if(isset($_POST['password']) AND $_POST['password']  == "kangaroo") { // if the password is correct echo the below
    echo "<h2>here are the access codes</h2>";
    echo "<h4>GGGG-MMMM-NNNN-VVVV-CCCC-XXXX</h4>";
    echo "This page is reserved for NASA staff only.";

}
else {
    echo "<p>incorrect password</p>"; // else echo the password is incorrect
}

?>
