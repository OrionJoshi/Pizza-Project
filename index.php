<?php
    //Connect to database
    $conn = mysqli_connect('localhost','root','','pizza_project');

    //Check Connection
    if(!$conn){
        echo "Connection error:" . mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?>

    

</html>