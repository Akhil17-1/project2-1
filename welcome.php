<?php
// Initialize the session
session_start();

// insert config.php
include('config.php');
include('header.php');
 
// Check if the user is logged in, if not then redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Welcome, <?php echo ($_SESSION["username"]); ?></title>
</head>
<body>
    <h1>Welcome, <?php echo ($_SESSION["username"]); ?></h1>
    <p><a href="shop.php">Go to shop</a></p>
    <p><a href="logout.php">Sign Out of Your Account</a></p>
</body>
</html>
