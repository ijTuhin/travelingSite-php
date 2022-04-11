<?php

$connectDB = mysqli_connect("localhost", "root", "", "project") or die("connection failed!!");
if($connectDB){
    echo "Connected";
}
else{
    echo "Not connected";
}

?>