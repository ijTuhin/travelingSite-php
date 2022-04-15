<?php
session_start();
include("connectDB.php");

$user_email = $_POST['user_email'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM user WHERE user_email='$user_email' AND password='$password'");
if (mysqli_num_rows($check) > 0) {
  $userinfo = mysqli_fetch_array($check);
  $_SESSION['userinfo'] = $userinfo;
  echo '
          <script>
          alert("Welcome to wander");
            window.location = "../backend/main-home.html";
          </script>
        ';
}
else {
  echo '
          <script>
            alert("USER NOT FOUND!!");
            window.location = "../";
          </script>
        ';
}
?>