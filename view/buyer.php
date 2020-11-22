<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

if($_SESSION['utype'] != "customer") // Redirecting to home if user is not customer type
{
    header("location: home.php");
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

<body>
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
    <div class="container">
        <div>
            <h2 style="text-align: center;padding: 10px;">Book Tickets</h2>
        </div>
        <div style="text-align: center;">
            <h4 style="margin-bottom: 10px;">Available sits</h4>
            <form method="post"><label style="font-weight: 450;">Movie:&nbsp;<select class="form-control" name="movie" value="movie" style="margin-top: 5px;"><optgroup label="Movie list"><option value="" selected="">Select a movie...</option><option value="">Movie 1</option><option value="">Movie 2</option></optgroup></select></label>
                <div
                    class="btn-group d-block" role="group" style="margin-top: 15px;"><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">A1</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">A2</button>
                    <button
                        class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">A3</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">A4</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">A5</button></div>
        <div
            class="btn-group d-block" role="group" style="margin-top: 10px;"><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">B1</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">B2</button><button class="btn btn-primary"
                type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">B3</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">B4</button><button class="btn btn-primary" type="button"
                style="background: #00b59b;margin-right: 10px;width: 55px;">B5</button></div>
    <div class="btn-group d-block" role="group" style="margin-top: 10px;"><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">C1</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">C2</button><button class="btn btn-primary"
            type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">C3</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">C4</button><button class="btn btn-primary" type="button"
            style="background: #00b59b;margin-right: 10px;width: 55px;">C5</button></div>
    <div class="btn-group d-block" role="group" style="margin-top: 10px;"><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">D1</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">D2</button><button class="btn btn-primary"
            type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">D3</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">D4</button><button class="btn btn-primary" type="button"
            style="background: #00b59b;margin-right: 10px;width: 55px;">D5</button></div>
    <div class="btn-group d-block" role="group" style="margin-top: 10px;margin-bottom: 30px;"><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">E1</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">E2</button><button class="btn btn-primary"
            type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">E3</button><button class="btn btn-primary" type="button" style="background: #00b59b;margin-right: 10px;width: 55px;">E4</button><button class="btn btn-primary" type="button"
            style="background: #00b59b;margin-right: 10px;width: 55px;">E5</button></div>
    <div style="margin-bottom: 15px;text-align: center;"><button class="btn btn-primary" type="submit" style="margin-right: 10px;" name="submit">Apply</button><button class="btn btn-primary" type="reset">Clear</button></div>
    </form>
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