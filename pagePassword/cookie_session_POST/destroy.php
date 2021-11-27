<?php
// delete session
session_start();
session_destroy();
//delete cookie
setcookie("username", '', time()-3600);
setcookie("age", '', time()-3600);
setcookie("height", '', time()-3600);

setcookie(session_id(), "", time()-3600);
header("Location:index.php");
?>