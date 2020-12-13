<?php
session_start(); 
if(empty($_SESSION["username"]) || empty($_COOKIE['username'])) 
{
header("Location: ../control/logout.php"); // Redirecting To Home Page
}

if($_SESSION['utype'] != "employee") // Redirecting to home if user is not seller type
{
    header("location: home.php");
}

$_SESSION["id"]= " ";
$_SESSION["moviename"]= " ";
$_SESSION["showtime"]= " ";
$id= $moviename= $showtime= " ";
if(isset($_POST['confirm'])){
    $id=$_POST['id'];
    $_SESSION["id"]= $id;

    $moviename=$_POST['moviename'];
    $_SESSION["moviename"]=$moviename;

    $showtime=$_POST['showtime'];
    $_SESSION["showtime"]= $showtime;

}

?>

<!DOCTYPE html>
<html lang="en">
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
<fieldset>


<form action="  " method="POST" enctype="multipart/form-data">

<tr>
<td>Id:</td>
<td><input type="text" id="id" name="id"></td> 
</tr>
<br><br>

<tr>
<td>Movie Name:</td>
<td><input type="text" id="moviename" name="moviename"> </td>
</tr>
<br><br>

<td>Date of Birth:</td>
<td><input type="date" id="DOB" name="DOB" ></td>
<tr>
<br><br>

<tr>
<td>Show Time:</td>
<td><input type="text" id="showtime" name="showtime"> </td>
</tr>
<br><br>


<button type="button" onclick="alert">confirm</button>
    
</form>
</fieldset>
<?php
echo  $_SESSION ["id"];
echo "<br>";
echo  $_SESSION["moviename"];
echo "<br>";
echo  $_SESSION["showtime"];
echo "<br>";

?>
    <footer>
        <?php include("footer.php"); ?>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>