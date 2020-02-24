<?php

//fetch use4r from db using the received id($user_id)
require 'header.php';
require 'config.php';

//grab id: use &_GET
if (isset($_GET['id'])){
    $id = $_GET['id'];

//    fetch data from db using id
    $sql = "SELECT `id`, `Name`, `id_no`, `kra_pin`, `password` FROM `tenants` WHERE id=$id";
    $user = mysqli_query($connection,$sql);
//    create associative array to split data into column title and actual values: use msqli_fetch()
    $row = mysqli_fetch_array($user);

    echo "<div class='card'>";
    echo $row['name']. '<br>';
    echo $row['id_no']. '<br>';
    echo $row['kra_pin']. '<br>';
    echo "</div>";




}



require 'footer.php'






?>
