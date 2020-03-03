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
