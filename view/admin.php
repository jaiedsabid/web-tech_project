<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

if($_SESSION['utype'] != "admin") // Redirecting to home if user is not admin type
{
    header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Panel</title>
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" sizes="100x100" href="assets/img/icons8-movie-ticket-100.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<?php include("navbar.php"); ?>
    <h1>Admin Panel</h1>
    

    <table>
        <tr>
            <th>Full name</th>
            <th>Username</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>User Type</th>
        </tr>

<?php
$conn = mysqli_connect("localhost","root","","ticketing_sys");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql ="SELECT fullname, username, gender,email,dob,utype from users";
    $result =$conn-> query($sql);

    if($result-> num_rows > 0)
    {
        while ($row = $result -> fetch_assoc())
        {
            echo '<tr><td style="width=100px;">'. $row["fullname"] . "</td><td>" . "<td>". $row["username"] . "</td><td>". $row ["gender"]."</td><td>". $row ["email"]."</td><td>". $row ["dob"]."</td><td>". $row ["utype"]."</td></tr>";
        }
        echo "</table>";

    }

    else
    {
        echo "0 result";
    }
    $conn -> close();
?>

        <br>
        <br>
        <br>
        <input type="button" name="Add Movies" value="Add Movies">  
        <input type="button" name="Delete Movies" value="Delete Movies">  
        <input type="button" name="Remove Seller" value="Remove Seller">
        <input type="button" name="Remove Buyer" value="Remove Buyer">
        <input type="button" name="Verify selle" value="Verify selle">
    </table>

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