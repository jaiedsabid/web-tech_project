<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        legend {
            text-transform: uppercase;
        }

        .container {
            display: block;
            max-width: 500px;
            padding: 10px;
            margin: auto;
            position: relative;
        }

        .form-warper {
            margin: 5px 0px 0px 5px;
            padding: 10px;
        }

        .form-group {
            margin: 5px 0px 0px 5px ;
            padding: 10px;
        }

        .form-legend {
            max-width: 65%;
        }

        .form-border {
            border-bottom: 1px solid black;
            max-width: 100%;
        }

        .form-submit {
            margin: 2px 0px 0px 10px ;
            padding: 5px;
            max-width: 50%;
            word-spacing: 5px;
        }

        .form-submit input {
            padding: 4px;
            width: 65px;
            margin-top: 10px;
        }

        .inp_x {
            padding: 5px;
        }

        .container>fieldset {
            margin-top: 25px;
        }

        footer {
            position: fixed;
            bottom: 5px;
            margin-left: 8%;
        }

        #full-name, #user-email, #username, #password, #cpassword{
            position: absolute;
            left: 46%;
            max-width: 100%;
        } 
    </style>
</head>
<body>

<?php
    $nameE = $emailE = $usernameE = $passE = $cpassE = $message_x = $message_f = "";
    $namei = $emaili = $usernamei = $gender = $dob = $passi = "";
    $err_star = "<p style='color: red; display: inline-block'>*</p>";
    $err_pass = $message_s = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $gender = $_POST['gender'];
        $dob = $_POST['date'];
        if(empty($_POST['name'])){$nameE = $err_star; $message_x = "Please Fillup Required Fields!";}
        else{$namei = $_POST['name'];}
        if(empty($_POST['email'])){$emailE = $err_star;}
        else{$emaili = $_POST['email'];}
        if(empty($_POST['username'])){$usernameE = $err_star;}
        else{$usernamei = $_POST['username'];}
        if(empty($_POST['password'])){$passE = $err_star;} else {
            if($_POST['password'] != $_POST['cpassword'])
            {
                $err_pass = "<h4 style='color: red;'>Password didn't match.</h4>";
            }
            else{$passi = $_POST['password'];}
        }
        if(empty($_POST['cpassword'])){$cpassE = $err_star;}


        $target_dir = "files/";
        $target_file = $target_dir . basename($_FILES["FileUpload"]["name"]);

        if (move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $target_file)) {
            $message_f = "The file ". basename( $_FILES["FileUpload"]["name"]). " has been uploaded.";
        }
        else {
            $message_f = "Sorry, there was an error uploading your file.";
        }
?>

<?php
    // Database
    $server = "localhost";
    $usernamedb = "root";
    $passdb = "";
    $databasenm = "ticketing_sys";

    $conx = new mysqli($server, $usernamedb, $passdb, $databasenm);

    if($conx->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $querx = "INSERT INTO users VALUES ('$usernamei', '$namei', '$gender', '$emaili', '$passi', '$dob')";

    if($conx->query($querx))
    {
        $message_s = "<h4>Registration successful...</h4>" ;
    }
    else
    {
        $message_s =  "<h6>Registration failed...!</h6>";
    }

    $conx->close();
    }
?>

    <div class="container">
        <?php
            echo "<h4 style='color: red'>$message_x</h4>";
            echo "<h4 style='color: red'>$message_f</h4>";
            echo $err_pass;
            echo $message_s; 
        ?>
        <fieldset>
            <legend><strong>Registration</strong></legend>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <div class="form-warper">
                <div class="form-group form-border">
                    <label for="full-name">Name:</label>
                    <input type="text" name="name" id="full-name"/><?php echo $nameE;?>
                </div>

                <div class="form-group form-border">
                    <label for="user-email">Email:</label>
                    <input type="email" name="email" id="user-email"/><?php echo $emailE;?>
                </div>

                <div class="form-group form-border">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/><?php echo $usernameE;?>
                </div>

                <div class="form-group form-border">
                    <label for="password">Password:</label></td>
                    <input type="password" name="password" id="password"/><?php echo $passE;?>
                </div>
                
                <div class="form-group form-border">
                    <label for="cpassword">Confirm Password:</label></td>
                    <input type="password" name="cpassword" id="cpassword"/><?php echo $cpassE;?>
                </div>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>Gender</legend>
                        <div class="btn-group btn-group-toggle inp_x" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="male" value="male" checked="checked"> Male
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="female" value="female"> Female
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="female" value="female"> Other
                            </label>
                        </div>
                    </fieldset>
                </div>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <div class="inp_x">
                            <input type="date" name="date" id="dob">
                        </div>
                    </fieldset>
                </div>

                <div class="form-group form-legend">
                    <fieldset>
                        <legend>Profile Picture</legend>
                        <div class="inp_x">
                            <input type="file" name="FileUpload" id="FileUpload">
                        </div>
                    </fieldset>
                </div>
                
                <div class="form-submit">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </div>
            </form>
        </fieldset>
    <footer>
        <?php include 'footer.php'?>
    </footer>

    </div>
</body>
</html>