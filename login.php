<?php
session_start();
// insert config.php
include('config.php');
include('header.php');

if (isset($_POST['login'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  
    $result = mysqli_query($db, $query);

        // Check if any rows were returned
        if (mysqli_num_rows($result)== 1) {
            // Output data of each row
        $_SESSION['username'] =$username;
      $_SESSION['success'] = "You are now logged in";
        header('location: welcome.php');
        echo "Succesfully Logged in  ";
   
} else 
{

    echo "0 results";
}
   
}
mysqli_close($db);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - My Ecommerce Website</title>
  <style>
    body {
      background-color: #F0F8FF; /* light blue */
      #display: flex;
      #justify-content: center;
      #align-items: center;
      height: 100vh;
    }

    form {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
</style>
</head>
<body>
  <h1>Login</h1>
  <form method="post" action="login.php">
    
    <div>
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div>
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div>
      <button type="submit" name="login">Login</button>
    </div>
  </form>
</body>
</html>
