<?php

include('db.php');


function loadDataByUser($username)
{
    $con = new db();
    $conObj = $con->OpenCon();
    $data = $con->getMessageAndReplyByID($conObj, $username);
    $con->CloseCon($conObj);


    for($i = 0; $i < count($data); $i += 1)
    {
        $id = $data[$i]['id'];
        $message = $data[$i]['message'];
        $reply = $data[$i]['reply'];
        $cu_id = $data[$i]['cu_id'];
        $stuff_id = $data[$i]['stuff_id'];

        echo '
        <form id="' . $id . '" method="post"><span class="message-id">Message ID: ' . $id . '    (Created by ' . $cu_id . ')<button class="btn btn-primary delete-btn" type="button" name="delete">Delete</button></span>
            <hr style="margin-bottom: auto;margin-top: auto;"><span class="cmessage">' . $message . '</span><span class="emessage">' . $reply . '    (Replied by ' . $stuff_id . ')</span><textarea class="form-control emessage-input message-block"></textarea><button class="btn btn-primary reply-btn" type="button" name="reply">Reply</button>
        </form>';
    }
}

//Delete message

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['rtype'] == 'DELETE')
{
    $con = new db();
    $conObj = $con->OpenCon();
    $data = $con->deleteMessage($conObj, $_POST['id']);
    $con->CloseCon($conObj);

    loadDataByUser($_POST['username']);

}

?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['rtype'] == 'REPLY')
{
    $reply_msg['id'] = $_POST['id'];
    $reply_msg['reply'] = $_POST['reply'];
    $reply_msg['stuff_id'] = $_POST['stuff_id'];


    $con = new db();
    $conObj = $con->OpenCon();
    $result = $con->replyMessage($conObj, $reply_msg);
    $con->CloseCon($conObj);

    // Load all message and reply again
    $con = new db();
    $conObj = $con->OpenCon();
    $data = $con->getMessageAndReply($conObj);
    $con->CloseCon($conObj);


    for($i = 0; $i < count($data); $i += 1)
    {
        $id = $data[$i]['id'];
        $message = $data[$i]['message'];
        $reply = $data[$i]['reply'];
        $cu_id = $data[$i]['cu_id'];
        $stuff_id = $data[$i]['stuff_id'];

        echo '
        <form id="' . $id . '" method="post"><span class="message-id">Message ID: ' . $id . '    (Created by ' . $cu_id . ')<button class="btn btn-primary delete-btn" type="button" name="delete">Delete</button></span>
            <hr style="margin-bottom: auto;margin-top: auto;"><span class="cmessage">' . $message . '</span><span class="emessage">' . $reply . '    (Replied by ' . $stuff_id . ')</span><textarea class="form-control emessage-input message-block"></textarea><button class="btn btn-primary reply-btn" type="button" name="reply">Reply</button>
        </form>';
    }
}
?>



<?php 
//Load data on page load

if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['rtype'] == 'ALL')
{
$con = new db();
$conObj = $con->OpenCon();
$data = $con->getMessageAndReply($conObj);
$con->CloseCon($conObj);


for($i = 0; $i < count($data); $i += 1)
{
    $id = $data[$i]['id'];
    $message = $data[$i]['message'];
    $reply = $data[$i]['reply'];
    $cu_id = $data[$i]['cu_id'];
    $stuff_id = $data[$i]['stuff_id'];

    echo '
    <form id="' . $id . '" method="post"><span class="message-id">Message ID: ' . $id . '    (Created by ' . $cu_id . ')<button class="btn btn-primary delete-btn" type="button" name="delete">Delete</button></span>
        <hr style="margin-bottom: auto;margin-top: auto;"><span class="cmessage">' . $message . '</span><span class="emessage">' . $reply . '    (Replied by ' . $stuff_id . ')</span><textarea class="form-control emessage-input message-block"></textarea><button class="btn btn-primary reply-btn" type="button" name="reply">Reply</button>
    </form>';
}
}

//Load data on page load by customer id

if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['rtype'] == 'OTHER')
{
    loadDataByUser($_GET['username']);
}

?>