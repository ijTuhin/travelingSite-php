<?php

session_start();
include("../backendApi/connectDB.php");
$u_id = $_SESSION['userinfo']['id'];
$approved = mysqli_query($connect, "SELECT * FROM user WHERE id='$u_id' AND confirm=1 AND request=0");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom-bootstrap.css">
    <title>Travel Wander-Confirm Bookings</title>
</head>

<body class=" relative">
    <!-- header section starts  -->
    <header class="fixed right-0 left-0 px-4 py-3 bg-slate-800 block z-50">
        <section class="flex items-center justify-between">

            <p><span class="text-sm text-slate-400">Route to </span><span class="text-lg text-yellow-500" style="font-family: 'Pacifico', cursive;
            ">GO Wander</span></p>

            <nav class="navbar">
                <a href="main-home.html"
                class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">Home</a>
                <a href="package.html"
                class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">Packages</a>
                <a href="bookings.html"
                class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">Book</a>
                <a href="about.html"
                class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">About</a>
            </nav>

            <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
        </section>
    </header>
    <!-- header section ends -->


    <main>
        <div class="container py-32">
        <?php
if ($approved) {
?>
                <p class="text-center text-6xl text-slate-500"> Your Trip Has Been Booked!!! </p>
                <a href="main-home.html"
                class="group relative flex justify-center ml-64 mt-12 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="width: 10rem">Go Back</a>
                <?php
}
else {
?>
                    <p class="text-center text-6xl text-slate-500"> Please wait!!! </p>
                <?php
}
?>
        </div>
    </main>


    <!-- footer section starts  -->
    <footer>

        <section class="footer mt-16 pb-8">

            <div class="box-container">

                <div class="box">
                    <h3>Quick links</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Home</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Our package</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Book now</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +9606-456-7890 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +880-111-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> abcd1234@gmail.com </a>
                    <a href="#"> <i class="fas fa-map"></i> Chattagram, Bangladesh </a>
                </div>

                <div class="box ml-10">
                    <h3>Follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
                </div>

            </div>

            <div class="text-sm text-white text-center mt-8 pb-4"> Route to <span>Go Wander</span> || 2022 ?? all rights
                reserved! </div>

        </section>

    </footer>
    <!-- footer section ends -->
</body>

</html>