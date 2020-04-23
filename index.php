<?php
    //Connect to database
    $conn = mysqli_connect('localhost','root','','pizza_project');

    //Check Connection
    if(!$conn){
        echo "Connection error:" . mysqli_connect_error();
    }

    //Write query for all prizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    //make query and get result
    $result = mysqli_query($conn,$sql);

    //Fetch the rsulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Release the memory 
    mysqli_free_result($result);

    //Close the connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?>

    

</html>