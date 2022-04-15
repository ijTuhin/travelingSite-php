<?php

session_start();
include("connectDB.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$member = $_POST['member'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$booked = mysqli_query($connect, "INSERT INTO bookings(name, email, phone, address, location, member, checkin, checkout) VALUES('$name','$email','$phone','$address','$location','$member','$checkin','$checkout') ");


if ($booked) {

    echo '
        <script>
            alert("Booked your trip!");
            window.location = "../backend/bookings.html";
        </script>
    ';

}
else {
    echo '
        <script>
            alert("something went wrong please try again!");
            window.location = "../backend/bookings.html";
        </script>
    ';
}
?>