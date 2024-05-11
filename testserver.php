<?php
$HOSTNAME="localhost";
$USERNAME='root'; 
$PASSWORD='';
$DATABASE='csed02';
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($conn)
{
    echo "connection successful";
}
else{
    die(mysqli_error($con));
}
?>