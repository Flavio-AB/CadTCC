<?php
    session_start();
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    session_abort();
    header('Location: login.php'); 
?>