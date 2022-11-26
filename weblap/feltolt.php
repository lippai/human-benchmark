<?php
session_start();
$conn = mysqli_connect("localhost", "root","","weblap")
or die("nem sikerült kapcsolódni az adatbázishoz") ;
mysqli_select_db($conn,"weblap")
or die("nem sikerült kiválasztani az adatbázist") ;

if(isset($_POST['btnClickedValue'])){
    $aim_score = $_POST['btnClickedValue'];
    $sql = "UPDATE reg SET aim_score = $aim_score WHERE email='". $_SESSION["name"]."'";
    $query = mysqli_query($conn,$sql);
}elseif(isset($_POST['chimp'])){
    $chimp_score = $_POST['chimp'];
    $sql = "UPDATE reg SET chimp_score = $chimp_score WHERE email='". $_SESSION["name"]."'";
    $query = mysqli_query($conn,$sql);
}elseif(isset($_POST['reaction'])){
    $reaction_score = $_POST['reaction'];
    $sql = "UPDATE reg SET reaction_score = $reaction_score WHERE email='". $_SESSION["name"]."'";
    $query = mysqli_query($conn,$sql);
}elseif(isset($_POST['typing'])){
    $typing_score = $_POST['typing'];
    $sql = "UPDATE reg SET typing_score = $typing_score WHERE email='". $_SESSION["name"]."'";
    $query = mysqli_query($conn,$sql);
}

header("Location:http://localhost/HUMAN-BENCHMARK-MAIN/weblap/index.php");
?>