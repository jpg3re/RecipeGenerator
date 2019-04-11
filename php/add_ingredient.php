<?php 
    

    require('db-connect.php');
    if(isset( $_POST['submit'] )){
    $ingredient=$_REQUEST['ingredient_input'];
    $recipe_id=$_REQUEST['title'];
    $user=$_REQUEST['user'];

    $_SESSION["user"] = $user;
    $_SESSION["recipe"] = $recipe_id;
    echo "Session variables are set.";

    echo $ingredient;
    echo $recipe_id;
    echo $user;
    $query ="INSERT INTO Ingredients (ingredient,recipe_id,user) VALUES (:ingredient, :recipe_id,:user)";

    $statement=$db->prepare($query);
    $statement->bindValue(':recipe_id',$recipe_id);
    $statement->bindValue(':ingredient',$ingredient);
    $statement->bindValue(':user',$user);
    $statement->execute();
    $statement->closeCursor();
    
    }

    header('Location: ../create_recipe.php');
    exit;
?>