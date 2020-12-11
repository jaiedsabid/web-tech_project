<?php 

    include("../control/logincheck.php");

    if(isset($_SESSION['username'])){
    header("location: home.php");
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User Login</title>
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" sizes="100x100" href="assets/img/icons8-movie-ticket-100.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background: rgb(241,247,252);">
    <div class="login-clean">
        <form id="login" method="post" >
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"  style="color: rgb(159,159,159);"></i></div>
            <div class="form-group"><input class="form-control" type="text" id="username" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" style="background: rgb(159,159,159);">Log In</button></div><a class="signup" href="registration.php">Don't have an account?<br>Register here</a>
            <div id="error-message" style="text-align: center;"><?php echo $error_m; ?></div>
        </form>
    </div>
    <footer class="text-truncate" style="text-align: center;">
        <p class="text-center footer-text" style="text-align: center;">Copyright© 2020-<?php include("footer.php"); ?> by Jaied Al Sabid. All Rights Reserved.</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="js/login-form.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>