<?php 
    
    session_start();
    require('db-connect.php');
    $title=$_REQUEST['new_title'];
    $user=$_SESSION["user"];
    $recipe_number=$_SESSION['recipe_id'];
    $old_title=$_SESSION['ingredient_data'][$recipe_number][0]['recipe_id'];
    echo "old title".$old_title;

    $statement =$db->prepare("UPDATE Ingredients SET recipe_id=$title WHERE recipe_id=$old_title");
    $statement->execute();
    $statement->closeCursor();

    $statement =$db->prepare("UPDATE Instructions SET recipe_id=$title WHERE recipe_id=$old_title");
    $statement->execute();
    $statement->closeCursor();
    

    #header('Location: ../my_recipes.php');
    exit;
?>