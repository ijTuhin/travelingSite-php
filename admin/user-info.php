<?php
session_start();
include("../backendApi/connectDB.php");
$userdata = mysqli_query($connect, "SELECT * FROM user");
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
    <title>Travel Wander-User Data</title>
</head>

<body class=" relative">
    <!-- header section starts  -->
    <header class="fixed right-0 left-0 px-4 py-3 bg-slate-800 block z-50">
        <section class="flex items-center justify-between">

            <p><span class="text-sm text-slate-400">Route to </span><span class="text-lg text-yellow-500" style="font-family: 'Pacifico', cursive;
            ">GO Wander</span></p>

            <nav class="navbar">
                <a href="#"
                    class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">Admin</a>
                <a href="user-info.php"
                    class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">User info</a>
                <a href="confirmation.php"
                    class="text-lg px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 text-slate-400 font-normal hover:decoration-yellow-600 hover:text-yellow-600">Confirm</a>
            </nav>

            <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
        </section>
    </header>
    <!-- header section ends -->


    <main>
        <div class="container py-32">
            <table align="center" border="1px" style="width: 600px; line-height: 40px;">
                    <p colspan="4" class="text-center text-3xl font-medium mb-3">User Data</p>
                <tr class="bg-blue-50">
                    <th class="py-2 text-center border border-gray-600">User Name</th>
                    <th class="py-2 text-center border border-gray-600">Phone number</th>
                    <th class="py-2 text-center border border-gray-600">Email address</th>
                    <th class="py-2 text-center border border-gray-600">Booking Request</th>
                </tr>
                <?php
while ($data = mysqli_fetch_assoc($userdata)) {
?>
                <tr>
                    <td class="border bg-gray-100 px-4"><?php echo $data['user_name']; ?></td>
                    <td class="border bg-gray-200 px-4"><?php echo $data['user_phone']; ?></td>
                    <td class="border bg-gray-100 px-4"><?php echo $data['user_email']; ?></td>
                    <td class="border bg-gray-200 px-4 text-center" ><?php echo $data['request']; ?></td>
                </tr>
                <?php
        }
?>
            </table>
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