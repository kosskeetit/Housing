<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'housedb';

//connection
$connection = mysqli_connect($servername,$username,$password,$db_name);

if(!$connection){
    echo "Connection to db failed ".mysqli_connect_error();
}

?>