<?php
session_start();

// initializing variables
$email    = "";
$errors = array(); 

define("DB_HOST","localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD","new_password");
define("DB_DATABASE", "onlinestore");

// connect to the database
$db = mysqli_connect('localhost', 'root', 'new_password', 'onlinestore');

//USER CONTACT
 if(isset($_POST['reg_user'])){
  // receive  input value from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM onlinestore WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  ?>