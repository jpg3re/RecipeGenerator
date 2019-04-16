<?php 
    
    session_start();
    require('db-connect.php');
    if(isset( $_POST['submit'] )){
    $username=$_REQUEST['username'];
    $_SESSION["username"]=$username;


    $statement =$db->prepare("SELECT * FROM Ingredients WHERE user='$username' ORDER BY recipe_id ASC");
    $statement->execute();
    
    $count=0;
    $total=0;
    $data=array();
    $name="initial_recipe";
    $recipe=array();
    while($entry= $statement->fetch()){
        if($name!=$entry['recipe_id']&$count!=0){
            $count=0;
            $data[]=$recipe;
            $recipe=array();
        }

        if($count==0){
            $recipe=array();
            $name=$entry['recipe_id'];
        }
        $recipe[]=$entry;
        $count++;
        $total++;
    }
    if($total==0){
        $_SESSION['error_msg']=True;
       
    }
    else{
        $_SESSION['error_msg']=False;
    }
    $data[]=$recipe;
    $_SESSION['ingredient_data']=$data;
    $statement->closeCursor();

    $statement1 =$db->prepare("SELECT * FROM Instructions WHERE user='$username' ORDER BY recipe_id ASC");

    $statement1->execute();

    $data=array();
    $name="initial_recipe";
    $recipe=array();
    $count=0;
    while($entry= $statement1->fetch()){
        echo $entry["Instruction"];
        if($name!=$entry['recipe_id']&$count!=0){
            $count=0;
            $data[]=$recipe;
            $recipe=array();
        }

        if($count==0){
            $recipe=array();
            $name=$entry['recipe_id'];
        }
        $recipe[]=$entry;
        $count++;
        echo $entry['recipe_id']."<br/>";
    }
    $data[]=$recipe;
    $_SESSION['instruction_data']=$data;
    $statement1->closeCursor();
    

    }
    header('Location: ../my_recipes.php');
    exit;
?>