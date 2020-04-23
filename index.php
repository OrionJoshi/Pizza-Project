<?php
    //Connect to database
    $conn = mysqli_connect('localhost','root','','pizza_project');

    //Check Connection
    if(!$conn){
        echo "Connection error:" . mysqli_connect_error();
    }

    //Write query for all prizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';


?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?>

    

</html>