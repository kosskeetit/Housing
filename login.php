<<<<<<< HEAD
<?php
require 'config.php';
require 'header.php';

$email=$password='';
$email_err=$password_err='';
//process data
if (isset($_POST['btn_login'])){
//    grab data from form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
//    check if the user has the right email and password
    $sql ="SELECT `id`, `username`, `email`, `password` FROM `users` WHERE email='$email' AND password='$password'";
    $result= mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0){
//        user found
//        loop through user data from table
        while ($row= mysqli_fetch_assoc($result)){
//            required id, email
            session_start();
            $_SESSION['kipande']= $row['id'];
            $_SESSION['email']= $row['email'];
            $_SESSION['loggedin']= true;
            header("location:index.php");
            exit();
        }
    }else{
//        password or email is wrong
        header("location:login.php");
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
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-info btn-block" name="btn_login">Login</button>
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

$house_id = $password ='';
$house_id_err = $password_err ='';

//process data
if (isset($_POST['btn_login'])){
    //    grab data from form
    $house_id = $_POST['house_id'];
    $password = $_POST['password'];

    //check if data is empty
    if (empty($house_id)){
        $house_id_err = "Please fill in the field";
    }
    if (empty($password)) {
        $password_err = "Please fill in the field";
    } else {

        $password = md5($password);
        //check if user has right email and password
        $sql = "SELECT `id`, `house_id`, `building_name`, `building_block`, `location`, `tenant`, `house_condition`,`password`  FROM `house` WHERE house_id = '$house_id' AND password = '$password'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            //  user found
            //  loop through user data from table
            while ($row = mysqli_fetch_assoc($result)) {
                //require id and email
                session_start();
                $_SESSION['kipande'] = $row['id'];
                $_SESSION['house_id'] = $row['house_id'];
                $_SESSION['loggedin'] = true;
                header("location:details.php");
                exit();
            }
        } else {
//        password or house_id is wrong
            header("location:login.php");
            exit();
        }

    }
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
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            <span class="error" style="color: orangered"><?php echo $password_err?></span><br>
                        </div>

                        <a href="">Forgot Password?</a>

                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_login">LogIn</button>
                        </div>

                        <a href="signup.php">Don't have an account? SignUp</a>

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
>>>>>>> 97d3156f4089596792db3d0c0562ce9f19e380ec
