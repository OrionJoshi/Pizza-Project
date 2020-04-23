<?php
    
    include('templates/config/db_connect.php');

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
            <?php foreach($pizzas as $pizza):?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h5><?php echo htmlspecialchars($pizza['title']);?></h5>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                                    <li><?php echo htmlspecialchars($ing); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">More info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if(count($pizzas)>= 3):?>
                <p>There are 3 or more Pizzas</p>
            <?php else: ?>
                <p>There are less than 3 Pizzas</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

    

</html>