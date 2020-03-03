<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/main.css">

    <title>House4U</title>
</head>
<body>
<!--start of navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="index.php">House4U</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if (isset ($_SESSION['loggedin'])){
                echo"
                  <li class='nav-item'>
                        <a class='nav-link' href='logout.php'>Logout</a>
                  </li>
                   <li class='nav-item'>
                      <a class='nav-link' href='pay_rent.php'></a>
                  </li>
                   <li class='nav-item'>
                      <a class='nav-link' href='book.php'></a>
                  </li>
                   ";
            }else{
                echo'
            
             <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">My House</a>
            </li>
            
            ';


            }
            ?>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Help</a>
                    <a class="dropdown-item" href="#">About us</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Contact Us</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!--end of navigation bar-->


