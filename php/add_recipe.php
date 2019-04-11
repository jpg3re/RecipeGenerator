<?php 

    require('db-connect.php');
    if(isset( $_POST['submit'] )){
    $recipe_user=$_REQUEST['user'];
    $recipe_title=$_REQUEST['title'];
    $number_query="SELECT user WHERE user=$recipe_user";
    #$num_rows = mysql_num_rows($number_query);
    $query ="INSERT INTO recipe_list (user, title) VALUES (:recipe_user, :recipe_title)";

    $statement=$db->prepare($query);
    $statement->bindValue(':recipe_user',$recipe_user);
    $statement->bindValue(':recipe_title',$recipe_title);
    $statement->execute();
    $statement->closeCursor();
    }
	
   # header('Location: ../index.html');
    exit;
?>