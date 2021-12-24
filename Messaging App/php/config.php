<?php
    $conn = mysqli_connect("localhost", "coolguy", "coolguy12", "chat");
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    } 
?>