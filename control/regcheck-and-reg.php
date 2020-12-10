<?php include("db.php"); ?>

<?php
    $reg_data = array();
    $error_st = false;
    $nameE = $emailE = $usernameE = $passE = $cpassE = $message_x = $message_f = "";
    $namei = $emaili = $usernamei = $gender = $dob = $passi = $utype = "";
    $err_star = "<p style='color: red; display: inline-block'>*</p>";
    $err_pass = $message_s = "";
    $pattern = "/^([a-z0-9]+)(([\-\_]+)[a-z0-9]+)*(\.[a-z0-9]+)*@([a-z0-9]+)(\.[a-z0-9]+)*((\.[a-z0-9]+)+)$/";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $reg_data['gender'] = $_POST['gender'];
        $reg_data['dob'] = $_POST['date'];
        $reg_data['usertype'] = $_POST['usertype'];
        if(empty($_POST['name'])){$nameE = $err_star; $message_x = "Please Fillup Required Fields!"; $error_st = true;}
        else{$reg_data['name'] = $_POST['name'];}
        if(empty($_POST['email'])){$emailE = $err_star; $error_st = true;}
        else
        {
            if(!preg_match($pattern, $_POST['email']))
            {
                $emailE = $err_star; $error_st = true;
            }
            else{$reg_data['email'] = $_POST['email'];}
        }
        if(empty($_POST['username'])){$usernameE = $err_star; $error_st = true;}
        else{$reg_data['username'] = $_POST['username'];}
        if(empty($_POST['password'])){$passE = $err_star; $error_st = true;} else {
            if($_POST['password'] != $_POST['cpassword'])
            {
                $err_pass = "<h4 style='color: red;'>Password didn't match.</h4>";
                $error_st = true;
            }
            else
            {
                if(strlen($_POST['password']) < 8)
                {
                    $err_pass = "<h4 style='color: red;'>Password length must be 8-12.</h4>";
                    $error_st = true;
                } else {
                    $reg_data['password'] = $_POST['password'];
                }
                
            }
        }
        if(empty($_POST['cpassword'])){$cpassE = $err_star; $error_st = true;}


        if($error_st != true)
        {
            if (is_uploaded_file($_FILES['FileUpload']['tmp_name'])) {
                $reg_data['img'] = addslashes(file_get_contents($_FILES['FileUpload']['tmp_name']));
                $reg_data['imgp'] = getimageSize($_FILES['FileUpload']['tmp_name']);

                if(isset($_POST['submit']))
                {
                    $conn = new db();
                    $connobj = $conn->OpenCon();
                    $message_s = $conn->UserRegistration($connobj, $reg_data);
                    $conn->CloseCon($connobj);
                    
                    $message_f = "The file ". basename( $_FILES["FileUpload"]["name"]). " has been uploaded.";
                }
            }
            else {
                $message_f = "Sorry, there was an error uploading your file.";
            }
        }

    }
?>