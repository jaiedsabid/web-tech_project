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
    <nav class="navbar navbar-light navbar-expand-md" style="background: rgb(179,189,197);box-shadow: 0px 0px 5px 2px rgb(139,139,146);">
        <div class="container-fluid"><a class="navbar-brand" href="#"><strong>Movie Tickets</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="buyer.php">Book Ticket</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Control Panel</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="admin.php">Admin Panel</a><a class="dropdown-item" href="seller.php">Employer Panel</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="support.php">Support</a></li>
                    <li class="nav-item"><a class="nav-link" href="../control/logout.php">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div style="text-shadow: 0px 0px 5px rgb(44,44,44);color: rgb(246,250,255);">
                        <h1>Welcome&nbsp;<span><?php echo $_SESSION['fullname']; ?></span></h1>
                        <hr style="border-color: rgb(207,207,207);">
                        <p><?php echo "Today is " . date("d-m-Y"); ?></p>
                    </div>
                    <div style="background: url(&quot;assets/img/header-bg-2.jpg&quot;) center / auto no-repeat;height: 100%;filter: blur(2px);position: relative;z-index: -1;bottom: 100%;box-shadow: 0px 0px 2px 2px #383839;"></div>
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