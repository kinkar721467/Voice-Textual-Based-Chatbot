<?php
session_start();
session_destroy();
header("Location: ../frontPage/index.php");
exit();
?>
