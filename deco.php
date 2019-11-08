<?php
session_start();
unset($_SESSION['log']);
unset($_SESSION['conferencier']);
unset($_SESSION['stat']);
header('Location: index.php')
 ?>
