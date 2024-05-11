<?php
session_start();
include 'testserver.php';
$checkname=$_POST['username'];
$checkpass=$_POST['passwors'];
$sql=" SELECT * FROM game WHERE username='$checkname'";
$result=mysqli_querry($con,$sql);
if($result)
{
    $num=mysqli_num_rows($result);
    if($num>0)
    {
    $_SESSION['name']="$checkname";
    header("Location: home.php");
    }
    
}
?>

