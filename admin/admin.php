<?php
session_start();
include("../backendApi/connectDB.php");

$admin_email = $_POST['admin_email'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM admin WHERE email='$admin_email' AND password='$password'");
if (mysqli_num_rows($check) > 0) {
    echo '
          <script>
          alert("Admin verified");
            window.location = "../admin/user-info.html";
          </script>
        ';
}
else {
    echo '
          <script>
            alert("Cannot recognize your identity!!!");
            window.location = "../";
          </script>
        ';
}
?>