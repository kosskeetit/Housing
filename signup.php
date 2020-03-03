<?php
require 'config.php';
require 'header.php';

$name=$id_no=$kra_pin=$password='';
$name_err=$id_no_err=$kra_pin_err=$password_err='';
//process data
if (isset($_POST['btn_signup'])){
//    grab data from form
    $name = $_POST['name'];
    $id_no = $_POST['id_no'];
    $kra_pin = $_POST['kra_pin'];
    $password = $_POST['password'];

//check if user exists
    $sql="SELECT * FROM `tenants` WHERE id_no=$id_no";
    $results = mysqli_query($connection,$sql);
    if(mysqli_num_rows($results) > 0){
//        user exits
        header("location:login.php");
        exit();
    }
//hash user password
    $password =md5($password);

//add user to db and take to login page
    $sql = "INSERT INTO `tenants`(`id`, `Name`, `id_no`, `kra_pin`, `password`) VALUES (NULL ,'$name','$id_no','$kra_pin','$password')";
    if (mysqli_query($connection,$sql)){
//        if user has been successfully added
        header("location:login.php");
        exit();
    }else{
        echo 'ERROR: '.mysqli_error($connection);
    }

}





?>
<!--start signup form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="auth" class="form" style="margin: 30px;">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">ID NO</label>
                            <input type="number" name="id_no" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">KRA PIN</label>
                            <input type="number" name="kra_pin" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">confirm password</label>
                            <input type="password" name="password2" class="form-control">
                        </div>



                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_signup">Signup</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>
<!--end signup form-->












<?php
require 'footer.php';
?>

=======
<?php

require 'config.php';
require 'header.php';

$house_id = $building_name = $building_block = $location = $house_condition = $tenant = $password ='';
$house_id_err = $building_name_err = $building_block_err = $location_err = $house_condition_err = $tenant_err = $password_err ='';

//process data
if (isset($_POST['btn_create'])){
    //    grab data from form and clean data
    $house_id = clean($_POST['house_id']);
    $building_name = clean($_POST['building_name']);
    $building_block = clean($_POST['building_block']);
    $location = clean($_POST['location']);
    $tenant = clean($_POST['tenant']);
    $password = clean($_POST['password']);
    $house_condition = clean($_POST['house_condition']);

//check if data is empty
    if (empty($house_id)){
        $house_id_err = "Please fill in the field";
    }
    if (empty($building_name)){
        $building_name_err = "Please fill in the field";
    }
    if (empty($building_block)){
        $building_block_err = "Please fill in the field";
    }
    if (empty($location)){
        $location_err = "Please fill in the field";
    }
    if (empty($house_condition)){
        $house_condition_err = "Please fill in the field";
    }
    if (empty($tenant)){
        $tenant_err = "Please fill in the field";
    }
    if (empty($password)){
        $password_err = "Please fill in the field";
    } else {


        //    check if user exists
        $sql = "SELECT * FROM `house` WHERE house_id = '$house_id'";
        $results = mysqli_query($connection, $sql);
        if (mysqli_num_rows($results) > 0) {
            //        user exists
            header("location:login.php");
            exit();
        }
        //    hash user password
        $password = md5($password);
        //    add user to db and take them to login page
        $sql = "INSERT INTO `house`(`id`, `house_id`, `building_name`, `building_block`, `location`, `tenant`, `password`, `house_condition`) VALUES (NULL,'$house_id','$building_name','$building_block','$location','$tenant','$password','$house_condition')";
        if (mysqli_query($connection, $sql)) {
            //        if user has been added successfully
            header("location:details.php");
            exit();
        } else {
            echo "ERROR:" . mysqli_error($connection);
        }
    }
}

function clean($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!--start signup form-->
<div class="container">
    <div class="row">
        <div class="col col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col col-md-6 col-lg-6 col-xl-6">
            <div id="auth-form" style="margin-top: 30px">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="">House ID</label>
                            <input type="number" name="house_id" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $house_id_err?></span><br>
                        </div>

                        <div class="form-group">
                            <label for="">Building Name</label>
                            <input type="text" name="building_name" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $building_name_err?></span><br>
                        </div>

                        <div class="form-group">
                            <label for="">Building Block</label>
                            <input type="text" name="building_block" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $building_block_err?></span><br>
                        </div>

                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $location_err?></span><br>
                        </div>

                        <label for="">House Condition</label><br>
                        <input type="radio" name="house_condition" value="occupied">Occupied
                        <input type="radio" name="house_condition" value="not_occupied">Not Occupied
                        <input type="radio" name="house_condition" value="construction">Under Construction<br><br>
                        <span class="error" style="color: orangered"><?php echo $house_condition_err?></span><br>

                        <div class="form-group">
                            <label for="">Tenant</label>
                            <input type="text" name="tenant" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $tenant_err?></span><br>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $password_err?></span><br>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_create">SignUp</button>
                        </div>

                        <a href="login.php">Already have an account? LogIn</a>


                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>

<!--end signup form-->
<?php
require 'footer.php';
?>
