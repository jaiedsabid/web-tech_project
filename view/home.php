<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Movie Ticket Booking System</title>
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" sizes="100x100" href="assets/img/icons8-movie-ticket-100.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<?php
        include("../control/db.php");

        $con = new db();
        $conobj = $con->OpenCon();
        $res = $con->CheckUserType($conobj, $username);
        $con->CloseCon($conobj);

        $_SESSION['all_data'] = $res;
        $_SESSION['utype'] = $res['utype'];
        $_SESSION['fullname'] = $res['fullname'];
?>

<body style="background: rgb(241,247,252);">

    <?php include('navbar.php'); ?>

    <div>
        <div style="height: 100vh;background: url(&quot;assets/img/header-bg-2.jpg&quot;) center / cover no-repeat;">
            <div class="container">
                <div class="row" style="margin-right: auto;margin-left: auto;">
                    <div class="col-md-12 text-center">
                        <div style="text-shadow: 0px 0px 5px rgb(44,44,44);color: rgb(255,255,255);background: rgba(255,255,255,0.8);margin-top: 225px;padding-top: 90px;height: 50vh;">
                            <h1 style="color: rgb(88,0,0);">Welcome&nbsp;<span style="color: rgb(88,0,0);"><?php echo $_SESSION['fullname']; ?></span></h1>
                            <hr style="border-color: #f32424;width: 275px;color: rgb(88,0,0);">
                            <p style="color: rgb(88,0,0);"><?php echo "Today is " . date("d-m-Y"); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: justify;font-size: 16px;margin-top: 10px;font-weight: 400;padding: 5px;box-shadow: 0px 0px 2px 1px rgb(223,224,225);">
                    <?php
                        if($_SESSION['utype'] == "customer")
                        {
                            include("cust_message.php");
                        }
                        elseif($_SESSION['utype'] == "admin")
                        {
                            include("admin_message.php");
                        }
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background: #e7f0f8;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-youtube"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="profile.php">Profile</a></li>
                <li class="list-inline-item"><a href="support.php">Support</a></li>
            </ul>
            <p class="copyright">Copyright© 2020-<?php include("footer.php"); ?> by Jaied Al Sabid. All Rights Reserved.</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>