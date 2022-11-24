<?php
$conn = mysqli_connect("localhost", "root","","weblap")
or die("nem sikerült kapcsolódni az adatbázishoz") ;
mysqli_select_db($conn,"weblap")
or die("nem sikerült kiválasztani az adatbázist") ;

$email = $_POST['email'];
$jelszo = $_POST['jelszo'];

$check="SELECT email FROM reg WHERE email = '$_POST[email]'";
$rs = mysqli_query($conn,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    header("Location:http://localhost/HUMAN-BENCHMARK-MAIN/weblap/sign_up.html");
}else{
    $sql = "insert into reg (email,jelszo) values ('$email', '$jelszo');" ;
    $query = mysqli_query($conn,$sql) ;
    header("Location:http://localhost/HUMAN-BENCHMARK-MAIN/weblap/index.php");
}

?>