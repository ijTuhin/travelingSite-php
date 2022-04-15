<?php

session_start();
include("connectDB.php");

$name = $_POST['name'];
$email = $_POST['email'];

$check = mysqli_query($connect, "SELECT * FROM user WHERE user_email='$email' AND user_name='$name'");

if (mysqli_num_rows($check) > 0) {
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $member = $_POST['member'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $booked = mysqli_query($connect, "INSERT INTO bookings(name, email, phone, address, location, member, checkin, checkout) VALUES('$name','$email','$phone','$address','$location','$member','$checkin','$checkout') ");

    if ($booked) {
        $request = $_POST['request'];
        $confirm = $_POST['confirm'];
        $u_id = $_SESSION['userinfo']['id'];
        $rqst = mysqli_query($connect, "UPDATE user SET request=1 WHERE id='$u_id' ");
        if ($rqst) {
            echo '
                <script>
                    alert("Request has been processed");
                    window.location = "../backend/bookings.html";
                </script>
            ';
        }
        else {
            echo '
                <script>
                    alert("Could not make booking request! try again");
                    window.location = "../backend/bookings.html";
                </script>
            ';
        }
    }
    else {
        echo '
        <script>
            alert("something went wrong please try again!");
            window.location = "../backend/bookings.html";
        </script>
    ';
    }
}
else {
    echo '
            <script>
              alert("USER NOT FOUND!!");
              window.location = "../backend/bookings.html";
            </script>
          ';
}


?>