<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();
//header("location:index.php");
echo "Logout success!";
 echo("<meta http-equiv=\"refresh\" content=\"2;url=index.php\">");






?>