<?php
require 'header.php';
require 'config.php';
$house_id = $building_name = $building_block = $location = $house_condition = $tenant = $password ='';

if(isset($_GET['id'])){
$id = $_GET['id'];

$sql = "SELECT `id`, `house_id`, `building_name`, `building_block`, `location`, `tenant`, `password`, `house_condition` FROM `house` WHERE id=$house_id";

$house = mysqli_query($connection, $sql);

//loop through data from db
while($row = mysqli_fetch_array($house)){
$house_id = $row['house_id'];
$building_name = $row['building_name'];
$building_block = $row['building_block'];
$location = $row['location'];
$house_condition = $row['house_condition'];
$tenant = $row['tenant'];
}
}

if(isset($_POST['update_btn']) and isset($_GET['id'])) {
$id = $_GET['id'];
echo "$id";

if (isset($_POST['house_id'])) {
$house_id = $_POST['house_id'];
}
if (isset($_POST['building_name'])) {
$building_name = $_POST['building_name'];
}
if (isset($_POST['building_block'])) {
$building_block = $_POST['building_block'];
}
if (isset($_POST['location'])) {
$location = $_POST['location'];
}
if (isset($_POST['tenant'])) {
$tenant = $_POST['tenant'];
}
}
?>

<div class="container">
    <div>
        <h2 class="content-title"><?php echo "House Number:<span style='color: #ff6653;font-weight: bold'>$house_id</span>" ?></h2>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-4"></div>
        <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="card">
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="form-group">
                            <label for="">House ID</label>
                            <input type="number" name="house_id" class="form-control" value="<?php echo $house_id?>">
                            <input type="number" hidden name="id" value="<?php echo $id?>">
                        </div>

                        <div class="form-group">
                            <label for="">Building Name</label>
                            <input type="text" class="form-control" name="building_name"  value="<?php echo $building_name?>">
                        </div>

                        <div class="form-group">
                            <label for="">Building Block</label>
                            <input type="text" name="building_block" class="form-control" value="<?php echo $building_block?>">
                        </div>

                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control" value="<?php echo $location?>">
                        </div>

                        <div class="form-group">
                            <label for="">Tenant</label>
                            <input type="text" name="tenant" class="form-control" value="<?php echo $tenant?>">
                        </div>

                        <div class="form-group">
                            <label for="">Current House Condition</label><br>
                            <?php if ($house_condition == 'occupied') {
                                echo "<input type='radio' name='house_condition' value='occupied' checked ><span class='bg-info' style='padding: 6px;margin-left: 5px'>Occupied</span>";
                            }elseif($house_condition == 'not_occupied'){
                                echo "<input type='radio' name='house_condition' value='not_occupied' checked ><span class='bg-success' style='padding: 6px;margin-left: 5px'>Not Occupied</span>";
                            }elseif ($house_condition == 'construction'){
                                echo "<input type='radio' name='house_condition' value='construction' checked ><span class='bg-danger' style='padding: 6px;margin-left: 5px'>Under Construction</span>";
                            }
                            ?><br>
                            <label for="">Select New House Condition</label><br>
                            <input type="radio" name="house_condition" value="occupied">Occupied
                            <input type="radio" name="house_condition" value="not_occupied">Not Occupied
                            <input type="radio" name="house_condition" value="construction">Under Construction<br><br>

                        </div>
                        <button type="submit" class="btn btn-dark" name="update_btn">House Update</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4"></div>
    </div>
</div>



<?php
require 'footer.php';
?>