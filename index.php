<?php
require 'config.php';
require 'header.php';
echo '<h1>Our Users</h1>';
//query for selecting all records from table users
$sql = "SELECT * FROM `tenants`";

//store data from db in a variable called users
$users = mysqli_query($connection,$sql);

//loop through data from db
while ($row = mysqli_fetch_array($users)){
    echo "<div class='card'>";
    $user_id = $row['id'];

    echo "<a href='details.php?id=$user_id'>";
    echo $row['Name'];
    echo"</a>";
    echo"<br>";
    echo "<button style='width: 25%;'><a href='delete.php?id=$user_id'>DELETE</a></button>";
    echo "</div>";
    echo "<br>";
}






require 'footer.php';
?>