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
            margin-top: 10px;
        }

        .inp_x {
            padding: 5px;
        }

        #full-name, #user-email, #username, #password, #cpassword{
            position: absolute;
            left: 700px;
            max-width: 100%;
        } 
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend><strong>Registration</strong></legend>
            <form action="action/message.php" method="post">
            <div class="form-warper">
                <div class="form-group form-border">
                    <label for="full-name">Name:</label>
                    <input type="text" name="name" id="full-name"required/>
                </div>

                <div class="form-group form-border">
                    <label for="user-email">Email:</label>
                    <input type="email" name="email" id="user-email"required/>
                </div>

                <div class="form-group form-border">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"required/>
                </div>

                <div class="form-group form-border">
                    <label for="password">Password:</label></td>
                    <input type="password" name="password" id="password"required/>
                </div>
                
                <div class="form-group form-border">
                    <label for="cpassword">Confirm Password:</label></td>
                    <input type="password" name="cpassword" id="cpassword"required/>
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
        <?php 
            $name = $email = $username = $pass = $cpass = $gender = $dob = "";
        ?>
    </div>
</body>
</html>