<?php
session_start();
unset($_SESSION["name"]);
header("Location:http://localhost/HUMAN-BENCHMARK-MAIN/weblap/index.php");
?>