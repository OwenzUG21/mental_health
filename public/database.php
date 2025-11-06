<?php
$hostname="localhost";
$password="";
$sename="root";
$dbse="";

$conn = mysqli_connect($hostname,$password,$sename,$dbse);

if(!$conn){
    die("connetion failed".mysqli_connect_error());

}
echo "Connected Good";






