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

