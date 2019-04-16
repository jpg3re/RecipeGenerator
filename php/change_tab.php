<?php 
    
    session_start();
    $recipe_id=$_REQUEST['tab'];
    $_SESSION["recipe_id"]=$recipe_id;

    

    header('Location: ../my_recipes.php');
    exit;
?>