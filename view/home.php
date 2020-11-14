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
    <title>Home</title>
    <style>
        * {
            list-style: none;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <p>Do you want to buy ticket?</p>
</body>
</html>