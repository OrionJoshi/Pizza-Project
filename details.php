<?php
    include('templates/config/db_connect.php');
    
    //Check GET request id parameter
    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //make Query
        $sql = "SELECT * FROM pizzas WHERE id = '$id'";

        //get the query result
        $result = mysqli_query($conn, $sql);

        //Fetching result in the array format
        $pizza = mysqli_fetch_assoc($result);

        //Free a variable
        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?> 

</html>