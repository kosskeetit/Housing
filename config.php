<?php
//>CONNECTING TO THE DATABASE
//credential to connect to db
$hostname='localhost';
$username='root';
$password='';
$databasename='';
//To connect to database: use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
$connection=mysqli_connect($hostname,$username,$password,$databasename);
//check connection
if ($connection==false){
    echo "Connection not successful<br>";
//    stop connection if unsuccessful
    die("ERROR:".mysqli_connect_error());
}
?>