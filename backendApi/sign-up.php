<?php
    include("connectDB.php");
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    if($password==$cpassword){
        move_uploaded_file($tmp_name, "../user-img/$image");
        $insert = mysqli_query($connect, "INSERT INTO signup(name, phone, password, image) VALUES('$name','$phone','$password','$image')");
        
        if($insert){
            echo '
                <script>
                    alert("Registration Successful!");
                    window.location = "../";
                </script>
            ';
        }
        else{
            echo '
                <script>
                    alert("Error!!");
                    window.location = "../backend/sign-up.html";
                </script>
            ';
        }
    }
    else{
        echo '
          <script>
            alert("Password and Confirm Password does not match!");
            window.location = "../backend/sign-up.html";
          </script>
        ';
    }

?>