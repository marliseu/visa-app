<?php

  // User input
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";
  $password2 = "";
  $ccnum = "";

  $formError = "";

  // if form submitted
  if (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {
    print_r ($_POST);

    $fname_cleaned = ucfirst(strtolower(trim($_POST['fname']))); // Strips white space, forces capitalization
    $lname_cleaned = ucfirst(strtolower(trim($_POST['lname'])));
    $email_cleaned = trim(strtolower($_POST['email'])); // Strips white space and removes capitalization
    $password_cleaned = $_POST['password'];
    $password2_cleaned = $_POST['password2'];
    $ccnum_cleaned = $_POST['ccnum'];

    $isWorking = True;

    // TODO if entries are NOT filled
    if (empty($fname_cleaned) || empty($lname_cleaned) || empty($email_cleaned) || empty($password_cleaned) || empty($password2_cleaned) || empty($ccnum_cleaned)) {
      $formError = "Please fill out all required fields.";
      $isWorking = False;
    }

    // If passwords mismatch
    if ($_POST['password'] != $_POST['password2'] && $isWorking) {
      $formError = "Passwords must match.";
      $isWorking = False;
    }

    // Returns # of rows w/ given email
    $emailsearch = mysqli_query($db, "SELECT *
                                        FROM `users`
                                       WHERE `email` = '$email_cleaned'");
    $emailResultNum = mysqli_num_rows($emailsearch);
    if ($emailResultNum != 0 && $isWorking) {
      $formError = "Email already in use, please use another.";
      $isWorking = False;
    }

    $cryptpw = $_POST["password"];
    if ($cryptpw == false){
      $formError = "Failed to encrypt password.";
      $isWorking = False;
    }

    // Saves info to users database
    if ($isWorking) {
      mysqli_query($db, "INSERT INTO `users` (`email`, `password`, `ccnum`, `fname`, `lname`)
                              VALUES ('$email_cleaned', '$cryptpw', '$ccnum_cleaned', '$fname_cleaned', '$lname_cleaned')");
      header("location: index.php");
    }
  }

  $title = "Register";

  require('views/head.php');
  require('views/navigation.php');
  require('views/register-page.php');
  require('views/footer.php');
  require('views/scripts.php');
?>
