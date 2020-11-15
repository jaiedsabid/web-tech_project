<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
    .container {
        border: 1px solid black;
        width: 1020px;
    }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>
    
    <div class="container">
    <label for="name">Name: </label><?php echo $_SESSION['fullname']; ?> <br>
    </div>
</body>
</html>