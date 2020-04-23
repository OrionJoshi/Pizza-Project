<?php
    //Connect to database
    $conn = mysqli_connect('localhost','root','','pizza_project');

    //Check Connection
    if(!$conn){
        echo "Connection error:" . mysqli_connect_error();
    }

    //Write query for all prizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

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

    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizzas['title']);?></h6>
                            <div><?php echo htmlspecialchars($pizza['ingredients']);?></div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

    

</html>