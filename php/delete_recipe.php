<?php 
    
    session_start();
    require('db-connect.php');
    $user=$_SESSION["username"];
    $recipe_number=$_SESSION['recipe_id'];
    $old_title=$_SESSION['ingredient_data'][$recipe_number][0]['recipe_id'];
    echo "old title".$old_title;
    echo $user;
    $statement =$db->prepare("DELETE FROM Ingredients WHERE user='$user' and recipe_id='$old_title'");
    $statement->execute();
    $statement->closeCursor();

    $statement =$db->prepare("UPDATE FROM Instructions WHERE user='$user' and recipe_id='$old_title'");
    $statement->execute();
    $statement->closeCursor();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');

   
    

    header('Location: ../my_recipes.php');
    exit;
?>