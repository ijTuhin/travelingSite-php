<?php

session_start();
include("../backendApi/connectDB.php");
$u_id = $_SESSION['userinfo']['id'];
$confirm_rqst = mysqli_query($connect, "UPDATE user SET request=0 AND confirm=1 WHERE id='$u_id' ");

    if ($confirm_rqst) {
        $update_admin = mysqli_query($connect, "UPDATE admin SET rqst_id=0 WHERE rqst_id='$u_id' ");
        if ($update_admin) {
            echo '
                <script>
                    alert("Request approved by admin");
                    window.location = "../admin/user-info.php";
                </script>
            ';
        }
        else {
            echo '
                <script>
                    alert("Error in admin DB");
                    window.location = "../admin/confirmation.php";
                </script>
            ';
        }
    }
    else {
        echo '
        <script>
            alert("Error in confirmation");
            window.location = "../admin/confirmation.php";
        </script>
    ';
    }


?>