<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

include('../control/change-pass.php');
include('../control/update-general-info.php');


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
    <style>
    #warning {
        display: none;
        background-color: yellow;
        font-weight: 500;
        text-align: center;
    }
    </style>
</head>

<body style="background: rgb(241,247,252);">
    
    <?php include('navbar.php'); ?>

    <div class="text-center">
        <h1 style="padding: 10px;margin-top: 55px;">User Profile</h1>
    </div>
    
    <?php echo $mresult; echo $result1; ?> <!-- Action Message -->
    <div id="warning">Warning</div>
    <div style="margin-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: center;">
                    <h5>Profile Picture</h5> <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,' . base64_encode($_SESSION['all_data']['img']) . '" width="250px" height="250px" style="margin-bottom: 10px;"/>'; ?>
                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <hr>
                            <h5 style="text-align: center;padding: 10px;">Change General Info</h5>
                            <form id="general-info" method="post">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><label class="change-info" for="name">Full Name:<input id="fname" class="form-control" type="text" name="fname"></label><label class="change-info" for="email">Email:&nbsp;<input id="email" class="form-control" type="text" name="email"></label></div>
                                    </div>
                                    <div class="text-center"><button class="btn btn-primary change-info-btn" type="submit" name="ginfo">Apply</button><button class="btn btn-primary change-info-btn" type="reset" name="reset">Reset</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <hr>
                            <h5 style="text-align: center;padding: 10px;">Change Password</h5>
                            <form id="user-password" method="post">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><label class="change-info" for="password">New Password:<input id="password" class="form-control" type="password" name="password"></label><label class="change-info" for="password">Confirm Password:&nbsp;<input id="cpassword" class="form-control" type="password" name="cpassword"></label></div>
                                    </div>
                                    <div class="text-center"><button class="btn btn-primary change-info-btn" type="submit" name="submit">Apply</button><button class="btn btn-primary change-info-btn" type="reset" name="reset">Reset</button></div>
                                </div>
                            </form>
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
    <script src="js/profile.js"></script>
</body>

</html>