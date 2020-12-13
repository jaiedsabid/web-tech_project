<?php
session_start(); 
if(empty($_SESSION["username"]) || empty($_COOKIE['username'])) 
{
header("Location: ../control/logout.php"); // Redirecting To Home Page
}

if($_SESSION['utype'] == "support" && $_SESSION['utype'] == "customer" && $_SESSION['utype'] == "admin") // Redirecting to home if user is not admin type
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

<body style="background: #e7f0f8;">
    
    <?php include('navbar.php'); ?>

    <div style="background: #ffffff;padding-bottom: 20px;margin-top: 60px;">
        <h1 class="text-center">Support Center</h1>
        <div id="action-message">
            <div class="container text-center">
                <div class="row">
                    <div class="col"><span>Action Message</span></div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 60px;">
            <div class="row">
                <div class="col">
                    <div class="user-message-create">
                        <h4>Create new message</h4><textarea class="form-control-lg user-message-input" placeholder="Your Message" cols="31" name="user-message"></textarea><button class="btn btn-primary post-btn" type="button" name="create">Post</button></div>
                </div>
            </div>
            <div class="row">
                <div class="col message-block">
                    <h4 class="text-center" style="margin-top: 10px;">Messages &amp; Reply</h4>
                    <div><span class="message-id">MessageID</span>
                        <hr style="margin-bottom: auto;margin-top: auto;"><span class="cmessage">Message</span><span class="emessage">Reply Message</span><textarea class="emessage-input message-block"></textarea><button class="btn btn-primary reply-btn" type="button" name="reply">Reply</button></div>
                    <div><span class="message-id">MessageID</span>
                        <hr style="margin-bottom: auto;margin-top: auto;"><span class="cmessage">Message</span><span class="emessage">Reply Message</span><textarea class="emessage-input"></textarea><button class="btn btn-primary reply-btn" type="button" name="submit">Reply</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background: #e7f0f8;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-youtube"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Profile</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
            <p class="copyright">Copyright© 1999-2020 by Jaied Al Sabid. All Rights Reserved.</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>