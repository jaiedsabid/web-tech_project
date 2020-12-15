<?php 

include('db.php');

$result = '';

if(isset($_POST['create']))
{
    if($_SESSION['all_data']['utype'] != 'support')
    {

        $support_msg['msg'] = $_POST['user-message'];
        $support_msg['cid'] = $_SESSION['username'];
        if(strlen($support_msg['msg']) >= 5)
        {
            $con = new db();
            $conObj = $con->OpenCon();
            $result = $con->createSupportMessage($conObj, $support_msg);
            $con->CloseCon($conObj);
        }
        else
        {
            $result = 'Please write your message before posting...';
        }

    }
    else {
        $result = 'You can\'t create a support ticket...';
    }
}

?>