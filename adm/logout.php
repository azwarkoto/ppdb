<?php
session_start();

unset($_SESSION['kdadmin']);
unset($_SESSION['inisial']);
unset($_SESSION['nmadmin']);
session_destroy();

header("Location: ../");
 ?>
