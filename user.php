<?php
// Initialize the session
session_start();

// insert config.php
include('config.php');
include('header.php');
 
// Check if the user is not logged in, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
//require_once "config.php";
 
// Prepare a select statement
if(isset($_SESSION['login_user'])) {
    $user_id = $_GET['userid']; // retrieve user ID from URL parameter
$sql = "SELECT username, emailid FROM users WHERE userid = ?";
 
if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("i", $param_id);
    
    // Set parameters
    $param_id = $_SESSION["id"];
    
    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Store result
        $stmt->store_result();
        
        // Check if user exists, if yes then fetch user details
        if($stmt->num_rows == 1){
            // Bind result variables
            $stmt->bind_result($username, $email);
            $stmt->fetch();
        } else{
            // Redirect to login page
            header("location: login.php");
            exit;
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    $stmt->close();
}
 
// Close connection
$mysqli->close();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($username); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <table>
        <tr>
            <td><strong>Username:</strong></td>
            <td><?php echo htmlspecialchars($username); ?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
    </table>
</body>
</html>
