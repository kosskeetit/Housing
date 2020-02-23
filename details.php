<?php
require 'header.php'; //to include header code
require 'config.php';

echo "<h1>Our Houses</h1>";
//query for selcting all records from table users
$sql = "SELECT * FROM `house` WHERE 1";

//store data from db in a variable called users
$houses = mysqli_query($connection, $sql);

//loop through data from db
while ($row = mysqli_fetch_array($houses)){
    echo "<div class ='card'>";
    $house_id = $row["id"];
    echo "<a href='details.php?id=$house_id'>";

    echo $row['house_id'];
    echo $row['building_name'];
    echo $row['building_block'];
    echo $row['location'];
    echo $row['tenant'];
    echo $row['house_condition'];

    echo "</a>";
    echo "<br>";
    echo "<a href='delete.php?id=$house_id'>Delete</a>";
    echo "<a href='index.php?id=$house_id'>Update</a>";
    echo "</div>";
    echo "<br>";
}

require 'footer.php';
?>