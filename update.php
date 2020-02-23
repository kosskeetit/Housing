<?php

require 'config.php';

if (isset($_POST['update_btn'])){
//    if button is clicked
//    grab id first
    if (isset($_POST['id'])){
        $id = $_POST['id'];
//    grab form data
        $house_id = $_POST['house_id'];
        $building_name = $_POST['building_name'];
        $building_block = $_POST['building_block'];
        $location = $_POST['location'];
        $tenant = $_POST['tenant'];
        $house_condition = $_POST['house_condition'];

        $sql = "UPDATE `house` SET `house_id`= '$house_id',`building_name`='$building_name',`building_block`='$building_block',`location`='$location',`tenant`='$tenant',`house_condition`='$house_condition' WHERE id = '$id'";
//        execute update instruction
        if(mysqli_query($connection, $sql)){
            header("location:details.php?id=$id");
            exit();

        }else{
            echo "ERROR".mysqli_error($connection);
        }
    }

}

?>
