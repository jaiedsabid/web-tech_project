<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

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
    <div class="text-center">
        <h1 style="padding: 10px;">User Profile</h1>
    </div>
    <div style="margin-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: center;">
                    <h5>Profile Picture</h5><img class="img-fluid" src="../files/<?php echo $_SESSION['all_data']['img']; ?>" width="250px" height="250px" style="margin-bottom: 10px;"></div>
                <div class="col-md-6">
                    <div>
                        <div class="row">
                            <div class="col" style="margin-bottom: 5px;">
                                <p style="font-weight: 500;">Name:&nbsp;<span style="font-weight: normal;"><?php echo $_SESSION['all_data']['fullname']; ?></span></p>
                                <p style="font-weight: 500;font-style: normal;">Username:&nbsp;<span style="font-weight: 400;"><?php echo $_SESSION['all_data']['username']; ?></span></p>
                                <p style="font-weight: 500;">Gender:&nbsp;<span style="font-weight: 400; text-transform: capitalize;"><?php echo $_SESSION['all_data']['gender']; ?></span></p>
                                <p style="font-weight: 500;">Date of birth:&nbsp;<span style="font-weight: 400;"><?php echo $_SESSION['all_data']['dob']; ?></span></p>
                                <p style="font-weight: 500;">Email:&nbsp;<span style="font-weight: 400;"><?php echo $_SESSION['all_data']['email']; ?></span></p>
                                <p style="font-weight: 500;">User type:&nbsp;<span style="font-weight: 400; text-transform: capitalize;"><?php echo $_SESSION['all_data']['utype']; ?></span></p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 style="text-align: center;padding: 10px;">Change Password</h5>
                                <form method="post"><label class="d-inline" style="padding: 5px;">New Password:&nbsp;<input class="form-control" type="password" name="password"></label><label class="d-inline" style="padding: 5px;">Confirm Password:&nbsp;<input class="form-control" type="password" name="cpassword"></label>
                                    <div
                                        style="text-align: center;">
                                        <div class="btn-group" role="group"><button class="btn btn-primary" type="submit" name="submit" style="margin-right: 30px;border-radius: 5px;">Confirm</button><button class="btn btn-primary" type="reset" name="reset" style="border-radius: 5px;">Cancel</button></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
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