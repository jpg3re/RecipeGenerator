<?php 
    
    session_start();
    require('db-connect.php');
    if(isset( $_POST['submit'] )){
    $instruction=$_REQUEST['instruction_input'];
    $recipe_id=$_SESSION["recipe"];
    if($recipe_id==""){
        $_SESSION['recipe_error']=True;
    }
    else{
        $_SESSION['recipe_error']=False;
    }
    if($instruction==""){
        $_SESSION['instruction_error']=True;
        
    }
    else{
        $_SESSION['instruction_error']=False;
    }
    if($recipe_id!=""&$instruction!=""){
        $user=$_SESSION["user"];
        $_SESSION["instructions"][]=$instruction;
        $query ="INSERT INTO Instructions (instruction,recipe_id,user) VALUES (:instruction, :recipe_id,:user)";

        $statement=$db->prepare($query);
        $statement->bindValue(':recipe_id',$recipe_id);
        $statement->bindValue(':instruction',$instruction);
        $statement->bindValue(':user',$user);
        $statement->execute();
        $statement->closeCursor();
    }
    
    }

    header('Location: ../create_recipe.php');
    exit;
?>