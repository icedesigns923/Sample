<?php
// (A) START SESSION 
session_start();

// (B) HANDLE LOGIN
if (isset($_POST['user']) && !isset($_SESSION['user'])) {
  // (B1) USERS & PASSWORDS - SET YOUR OWN !
  $users = [
    "kateammy32" => "123456",
    "Sonawap" => "654321",
    
  ];

  // (B2) CHECK & VERIFY
  if (isset($users[$_POST['user']])) {
    if ($users[$_POST['user']] == $_POST['password']) {
      $_SESSION['user'] = $_POST['user'];
    }
  }

  // (B3) FAILED LOGIN FLAG
  if (!isset($_SESSION['user'])) { $failed = true; }
}

// (C) REDIRECT USER TO HOME PAGE IF SIGNED IN
if (isset($_SESSION['user'])) {
  header("Location: register.php"); // THIS IS MY HOME PAGE!
  exit();

//   // (D) REDIRECT USER TO SIGNIN PAGE IF REGISTERED
// if (isset($_SESSION['user'])) {
//   header("Location: register.php"); // THIS IS MY SIGNIN PAGE!
//   exit();}
}