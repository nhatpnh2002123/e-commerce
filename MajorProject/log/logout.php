<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['fullname']);
setcookie('remember',null,-1);
header('location: ../HomePage.php ');
mysqli_close($connect);