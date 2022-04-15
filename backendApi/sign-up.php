<?php
include("connectDB.php");
$user_name = $_POST['user_name'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

if ($password == $cpassword) {

    $check = mysqli_query($connect, "SELECT * FROM user WHERE user_email='$user_email'");
    if (mysqli_num_rows($check) > 0) {
        echo '
            <script>
                alert("User already exists! Please Login to continue");
                window.location = "../index.html";
            </script>
        ';
    }

    else {
        move_uploaded_file($tmp_name, "../user-img/$image");
        $insert = mysqli_query($connect, "INSERT INTO user(user_name, user_phone, user_email, password, image) VALUES('$user_name','$user_phone', '$user_email', '$password','$image')");

        if ($insert) {
            echo '
                <script>
                    alert("Registration Successful!");
                    window.location = "../backend/main-home.html";
                </script>
            ';
        }
        else {
            echo '
                <script>
                    alert("Error!!");
                    window.location = "../backend/sign-up.html";
                </script>
            ';
        }
    }

}
else {
    echo '
          <script>
            alert("Password and Confirm Password does not match!");
            window.location = "../backend/sign-up.html";
          </script>
        ';
}

?>