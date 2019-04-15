<?php 
    
    session_start();
    require('db-connect.php');
    if(isset( $_POST['submit'] )){
    $ingredient=$_REQUEST['ing'];
    $recipe_id=$_REQUEST['title'];
    $user=$_REQUEST['user'];

    $_SESSION["user"] = $user;
    $_SESSION["recipe"] = $recipe_id;
    $_SESSION["ingredients"][]=$ingredient;
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