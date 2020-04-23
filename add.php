<?php
    if(isset($_POST['submit'])){
        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email must be a valid email address";
            }
        }

        //check title
        if(empty($_POST['title'])){
            echo 'An title is required <br />';
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z]+$/', $title)){
                echo "Title must be letters and spaces only";
            }
        }

        //Check for ingredient
        if(empty($_POST['ingredients'])){
            echo 'An ingredients are required <br />';
        }else{

        }
    }

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

        <section class="container grey-text">
            <h4 class="center">Add a Pizza</h4>
            <form action="" class="white" method="POST">
                <label for="">Your Email:</label>
                <input type="email" name="email">
                <label for="">Pizza Title:</label>
                <input type="text" name="title">
                <label for="">Ingredient(comma separated):</label>
                <input type="text" name="ingredients">
                <div class="center">
                    <input type="submit" name="submit" value = "submit" class="btn brand z-depth-0">
                </div>
           
            </form>
        </section>

    <?php include('templates/footer.php'); ?>

    
</html>