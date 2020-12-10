<?php

$result = '';

if(isset($_POST['ginfo']))
{
    $pattern = "/^([a-z0-9]+)(([\-\_]+)[a-z0-9]+)*(\.[a-z0-9]+)*@([a-z0-9]+)(\.[a-z0-9]+)*((\.[a-z0-9]+)+)$/";

    if(!empty($_POST['fname']) && !empty($_POST['email']))
    {
        if(preg_match($pattern, $_POST['email']))
        {

            $con = new db();
            $conObj = $con->OpenCon();
            $result = $con->changeGeneralInfo($conObj, $_SESSION['all_data']['username'], $_POST['fname'], $_POST['email']);
            $con->CloseCon($conObj);
        }

        else {
            $result = '<div id="action-message">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center"><span>* Please enter a valid email address *</span></div>
                                </div>
                            </div>
                        </div>' ;
        }
    }

    else
    {
        $result = '<div id="action-message">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center"><span>* Please fill out the form correctly *</span></div>
                            </div>
                        </div>
                    </div>' ;
    }
}

?>

<?php
    $con = new db();
    $conobj = $con->OpenCon();
    $res = $con->CheckUserType($conobj, $_SESSION['username']);
    $con->CloseCon($conobj);
    $_SESSION['all_data'] = NULL;
    $_SESSION['all_data'] = $res;
?>