<?php
    session_start();
    if(count($_POST)>0) {
        $conn = mysqli_connect("localhost", "root","","weblap") or die('Unable To connect');
        $result = mysqli_query($conn,"SELECT * FROM reg WHERE email='" . $_POST["email"] . "' and jelszo = '". $_POST["jelszo"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["name"] = $row['email'];
        header("Location:http://localhost/HUMAN-BENCHMARK-MAIN/weblap/index.php");
        } else {
         echo "Invalid Username or Password!";
        }
    }
?>