<?php
class db
{
    
    function OpenCon() 
    {
        $suser = "root";
        $spass = "";
        $server = "localhost";
        $dbname = "ticketing_sys";
        $conn = new mysqli($server, $suser, $spass, $dbname) or die("Connection failed: %s\n".$conn->error);

        return $conn;
    }
    function CheckLogin($conn, $table, $user, $pass)
    {
        $que = "SELECT * FROM " . $table . " WHERE username='" . $user . "' AND userpass='" . $pass . "'";
        $result = $conn->query($que);
        return $result;
    }
    function UserRegistration($conn, $reg_data)
    {
        $def_value = "0"; // Default value of verified column
        $message_s = "";
        $uname = $reg_data['username']; $fname = $reg_data['name']; $gndr = $reg_data['gender'];
        $email = $reg_data['email']; $pass = $reg_data['password']; $dob = $reg_data['dob'];
        $utype = $reg_data['usertype']; $img = $reg_data['img'];
        $que = "INSERT INTO users VALUES ('$uname', '$fname', '$gndr', '$email', '$pass', '$dob', '$utype', '$img')";
        
        if($conn->query($que))
        {
            $message_s = "<h4>Registration successful...</h4>" ;
        }
        else {
            $message_s =  "<h6>Registration failed...!</h6>";
        }

        return $message_s;
    }
    function CheckUserType($conn, $username)
    {
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($query);
        if($result->num_rows > 0)
        {
            $res = $result->fetch_assoc();
        }
        $result->free();
        return $res;
    }
    function changePassword($conn, $username, $password)
    {
        $message_s = "";
        $que = "UPDATE users SET userpass = ? WHERE username = ?";
        $sqlq = $conn->prepare($que);
        $sqlq->bind_param("ss", $password, $username);
        
        if($sqlq->execute())
        {
            $message_s = '
            <div id="action-message">
                <div class="container">
                    <div class="row">
                        <div class="col text-center"><span>Password changed successfully</span></div>
                    </div>
                </div>
            </div>' ;
        }
        else {
            $message_s = '<div id="action-message">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center"><span>Password change failed!</span></div>
                                </div>
                            </div>
                        </div>';
        }

        $sqlq->close();

        return $message_s;
    }
    function changeGeneralInfo($conn, $username, $fullname, $email)
    {
        $message_s = "";
        $que = "UPDATE users SET fullname = ?, email = ? WHERE username = ?";
        $sqlq = $conn->prepare($que);
        $sqlq->bind_param("sss", $fullname, $email, $username);
        
        if($sqlq->execute())
        {
            $message_s = '
            <div id="action-message">
                <div class="container">
                    <div class="row">
                        <div class="col text-center"><span>General info updated successfully</span></div>
                    </div>
                </div>
            </div>' ;
        }
        else {
            $message_s = '<div id="action-message">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center"><span>General info updated failed!</span></div>
                                </div>
                            </div>
                        </div>';
        }

        $sqlq->close();

        return $message_s;
    }
    function CloseCon($conn)
    {
        $conn->close();
    }
}
?>