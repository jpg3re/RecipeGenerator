<?php 
    
    session_start();
    require('db-connect.php');
    if(isset( $_POST['submit'] )){
    $instruction=$_REQUEST['instruction_input'];
    $recipe_id=$_SESSION["recipe"];
    $user=$_SESSION["user"];

    $_SESSION["instructions"][]=$instruction;
    $query ="INSERT INTO Instructions (ingredient,recipe_id,user) VALUES (:ingredient, :recipe_id,:user)";

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