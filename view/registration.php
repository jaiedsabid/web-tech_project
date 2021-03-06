<?php
include("../control/regcheck-and-reg.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="100x100" href="assets/img/icons8-movie-ticket-100.png">
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

        .container>a {
            margin-top: 10px auto 10px auto;
            position: relative;
            left: 18%;
        }

        .footer {
            position: relative;
            left: 5%;
            margin-top: 10px;
            padding: 10px;
        }

        #message {
            display: none;
            font-weight: 600;
            fontsize: 25px;
            color: red;
        }

        #full-name, #user-email, #username, #password, #cpassword{
            position: absolute;
            left: 46%;
            max-width: 100%;
        } 
    </style>
</head>
<body>
    <div class="container">
    <div id="message">Warning</div>
    <?php
        echo "<h4 style='color: red'>$message_x</h4>";
        echo "<h4 style='color: red'>$message_f</h4>";
        echo $err_pass;
        echo $message_s; 
    ?>
        <fieldset>
            <legend><strong>Registration</strong></legend>
            <form id="signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" >
            <div class="form-warper">
                <div class="form-group form-border">
                    <label for="full-name">Name:</label>
                    <input type="text" name="name" id="full-name"/><?php echo $nameE; ?>
                </div>

                <div class="form-group form-border">
                    <label for="user-email">Email:</label>
                    <input type="email" name="email" id="user-email"/><?php echo $emailE; ?>
                </div>

                <div class="form-group form-border">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/><?php echo $usernameE; ?>
                </div>

                <div class="form-group form-border">
                    <label for="password">Password:</label></td>
                    <input type="password" name="password" id="password"/><?php echo $passE; ?>
                </div>
                
                <div class="form-group form-border">
                    <label for="cpassword">Confirm Password:</label></td>
                    <input type="password" name="cpassword" id="cpassword"/><?php echo $cpassE; ?>
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
                                <input type="radio" name="gender" id="other" value="female"> Other
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
                        <legend>User Type</legend>

                        <div class="btn-group btn-group-toggle inp_x">
                        <select name="usertype" id="usertype">
                            <option value="">Please Choose User Type</option>
                            <option value="customer">Customer</option>
                            <option value="admin">Admin</option>
                            <option value="employee">Employee</option>
                            <option value="support">Support</option>
                        </select>
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
                    <input type="submit" name="submit" value="Submit" id="submit">
                    <input type="reset" value="Reset">
                </div>
            </div>
            </form>
        </fieldset>
        <a href="../index.php" style="text-decoration: none; display: block;">Already have an account? Go back to login page</a>
    
    <footer>
        <div class="footer">Copyright© 2020-<?php include("footer.php"); ?> by Jaied Al Sabid. All Rights Reserved.</div>
    </footer>
    </div>
    <script src="js/signup-form.js"></script>
</body>
</html>