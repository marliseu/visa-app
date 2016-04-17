<?php

require ("inc/databaseconnect.php");

$title = 'Log In';

$email = "";
$password = "";
$formError = "";


// If submit button WAS clicked
if (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {
  print_r($_POST);
  //TODO Clean Vars
  $email_cleaned = trim(strtolower($_POST['email']));
  $password_cleaned = $_POST['password'];
  $isWorking = True;

  // Check form filled
  if (empty($_POST['email']) || empty($_POST['password'])) {
    $formError = "Please fill out form.";
    $isWorking = False;
  }

  // check for valid email
  // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_cleaned) && $isWorking) {
  //   $formError = "Please enter valid email address.";
  //   $isWorking = False;
  // }


  // Check if account found & store user info
  if ($isWorking) {
    $query = mysqli_query($db, "SELECT *
                                  FROM `users`
                                 WHERE `email` = '$email_cleaned'");
    $rows = mysqli_num_rows($query);
    if ($rows == 1) {
      $userInfo = mysqli_fetch_assoc($query);
      if (password_verify($password_cleaned, $userInfo["password"])){
        $_SESSION['id'] = $userInfo['id'];
        $_SESSION['email'] = $userInfo["email"];
        $_SESSION['fname'] = $userInfo["fname"];
        $_SESSION['lname'] = $userInfo["lname"];

        // $cookie_name = "user";
        // $cookie_value = $_SESSION['id'];
        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("location: dashboard.html"); // Redirect to homepage
      }
      else {
        $formError = "Incorrect email or password";
      }
    }
    else { // If account not found
      $formError = "User not found";
    }
  }
}

  require('views/head.php');
  require('views/navigation.php');
  require('views/login-page.php');
  require('views/footer.php');
  require('views/scripts.php');
?>
