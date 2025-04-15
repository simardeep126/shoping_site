<?php
$server="localhost";
$username="root";
$password="";
$database="bumbelz";


$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("connection was not build".mysqli_connect_error());
}

?>