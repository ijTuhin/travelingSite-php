<?php
session_start();
include("connectDB.php");

$email = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM signup WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($check) > 0) {
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