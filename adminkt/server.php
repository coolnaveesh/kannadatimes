<?php
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'u413525836_kannadauser', '1P_kannadauser','u413525836_kannadatimes');


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    // $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
	  // Password is correct, so start a new session
      session_start();
      $_SESSION['username'] = $username;
	  // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');                      
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>