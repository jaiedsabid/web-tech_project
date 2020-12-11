<?php

include('db.php');

$mresult = '';

if(isset($_POST['submit']))
{
    if(!empty($_POST['password']) && !empty($_POST['cpassword']))
    {
        if($_POST['password'] == $_POST['cpassword'])
        {
            if(strlen($_POST['password']) >= 8)
            {
                $con = new db();
                $conObj = $con->OpenCon();
                $result = $con->changePassword($conObj, $_SESSION['all_data']['username'], $_POST['password']);
                $con->CloseCon($conObj);
            }

            else {
                $mresult = '<div id="action-message">
                                <div class="container">
                                    <div class="row">
                                        <div class="col text-center"><span>* Password length must be 8 digit *</span></div>
                                    </div>
                                </div>
                            </div>';
            }
        }

        else {
            $mresult = '<div id="action-message">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center"><span>* Password do not match *</span></div>
                            </div>
                        </div>
                    </div>' ;
        }
    }

    else
    {
        $mresult = '<div id="action-message">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center"><span>* Password and Confirm password field cannot be empty *</span></div>
                            </div>
                        </div>
                    </div>' ;
    }
}

?>