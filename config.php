<?php

//Credentials to connecting to a db
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'BlogpointDB';
//To connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
function maxy($num1, $num2)
{
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}



$connection = mysqli_connect($hostname, $username, $password, $databasename);
//check connecton
if ($connection == false) {
    echo "connection not successful <br>";
    echo mysqli_connect_error() . "<br>";
//    stop connection if unsuccessful
    die('ERROR: ' . mysqli_connect_error());
}

?>