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

include('../control/support.php');

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
    <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background: rgba(179,189,197,0.8);box-shadow: 0px 0px 5px 2px rgb(139,139,146);">
        <div class="container-fluid"><a class="navbar-brand" href="#"><strong>Movie Tickets</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <?php include('navbar.php');?>
            </div>
        </div>
    </nav>
    <div style="background: #ffffff;padding-bottom: 20px;margin-top: 60px;">
        <h1 class="text-center">Support Center</h1>
        
        <div id="user_id" style="display: none;"><?php echo $_SESSION['all_data']['username']; ?></div>
        <div id="user_type" style="display: none;"><?php echo $_SESSION['all_data']['utype']; ?></div>
        
        <div id="action-message">
            <div class="container text-center">
                <div class="row">
                    <div class="col"><span><?php echo $result; ?></span></div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 60px;">
            <div class="row">
                <div class="col">
                    <form method="post" class="user-message-create">
                        <h4>Create new message</h4><textarea class="form-control form-control-lg user-message-input" placeholder="Your Message" cols="31" name="user-message"></textarea><button class="btn btn-primary post-btn" type="submit" name="create">Post</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div id="msg-reply-blk" class="col message-block">
                    <h4 class="text-center" style="margin-top: 10px;">Messages &amp; Reply</h4>
                    <form id="1" method="post"><span class="message-id">MessageID<button class="btn btn-primary delete-btn" type="button" name="delete">Delete</button></span>
                        <hr style="margin-bottom: auto;margin-top: auto;"><span class="cmessage">Message</span><span class="emessage">Reply Message</span><textarea class="form-control emessage-input message-block"></textarea><button class="btn btn-primary reply-btn" type="button" name="reply">Reply</button>
                    </form>
                    <form method="post"><span class="message-id">MessageID<button class="btn btn-primary delete-btn" type="button" name="delete">Delete</button></span>
                        <hr style="margin-bottom: auto;margin-top: auto;"><span id="smessage-1" class="cmessage">Message</span><span id="sreply-1" class="emessage">Reply Message</span><textarea class="form-control emessage-input message-block"></textarea><button class="btn btn-primary reply-btn" type="button" name="reply">Reply</button>
                    </form>
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
    <script src="js/support.js"></script>
</body>

</html>