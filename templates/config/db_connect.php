<?php 

    //Connect to database
    $conn = mysqli_connect('localhost','root','','pizza_project');

    //Check Connection
    if(!$conn){
        echo "Connection error:" . mysqli_connect_error();
    }

?>