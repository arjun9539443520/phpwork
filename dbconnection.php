<?php
$servername="localhost";
$username="root";
$password="";
$dbname="exam";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if(! $connection){
    die ("unable to connect".mysqli_connect_error());
}
else{
    echo "connection sucess";
}