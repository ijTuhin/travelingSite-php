<?php

$connect = mysqli_connect("localhost", "root", "", "project") or die("connection failed!!");
if($connect){
    echo "Connected";
}
else{
    echo "Not connected";
}

?>