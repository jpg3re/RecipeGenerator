<?php 

    require('db-connect.php');

    $result =$db->prepare("SELECT * FROM Ingredients");
    $result->execute();
    while($user = $result->fetch()){
        echo $user['recipe_id']."<br/>";
    }
    #setcookie("user", "", time() - 3600);
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    $result->closecursor();
    header('Location: ../create_recipe.php');
    exit;
?>