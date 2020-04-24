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

    <div class="container center">
        <?php if($pizza): ?>
            <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created By : <?php htmlspecialchars($pizza['email']); ?></p>
            <p><?php echo date($pizza['created_at']); ?></p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

            <!-- Delete Form -->
            <form action="details.php" method ="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>
        <?php else: ?>

            <h5>No Such Pizza Exist!</h5>

        <?php endif; ?>
    </div>

    <?php include('templates/footer.php'); ?> 

</html>