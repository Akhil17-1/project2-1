<?php
// start the session
session_start();

// insert config.php
include('config.php');
include('header.php');

// destroy the session
session_destroy();

// redirect to the login page
header('Location: login.php');
exit;
?>
