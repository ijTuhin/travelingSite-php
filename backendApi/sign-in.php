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
            // window.location = "../backendApi/user-info.php";
          </script>
        ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Travel Wander-Home</title>
</head>

<body>
    <header class="container">
        <nav class="flex items-center justify-between mt-3">
            <div class="ml-8 font-mono">
                <p>Go <span>Wander</span></p>
            </div>
            <div>
                <a class="px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-indigo-600 hover:text-indigo-600"
                    href="#"> Home
                </a>
                <a class="px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-indigo-600 hover:text-indigo-600"
                    href="../index.html"> Logout </a>
                <a class="px-2 py-1 ml-1 hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-indigo-600 hover:text-indigo-600"
                    href="#"> About us </a>
            </div>
        </nav>
    </header>
    <main>
        <?php while ($data = mysqli_fetch_assoc($check)) {
?>
                <p>Name: <?php echo $data['name']; ?> </p>
                <p>Phone no: <?php echo $data['phone']; ?></p>
                <p>Email: <?php echo $data['email']; ?></p>
        <?php
  }
?>
    </main>
</body>

</html>
<?php
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