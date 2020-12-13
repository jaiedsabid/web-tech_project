<?php

setcookie('username', $_SESSION['username'], time() - 3600, '/');

session_start();

session_unset();

if(session_destroy())
{
    header('Location: ../view/login.php');
}

?>