<!-- Jack Girerd jpg3re -->
<?php
  session_start();
if (isset($_SESSION['username'])) {
  #$_SESSION['recipe'] = "Enter Recipe Name";
  #$_SESSION['user'] = "Enter username";
}else{
  $_SESSION['username'] = "";
  $_SESSION['recipe_id'] = 0;
  $_SESSION['error_msg']=False;
  $ingredient_array=array();
  $_SESSION['ingredient_data']=$ingredient_array;

  $instruction_array=array();
  $_SESSION['instruction_data']=$instruction_array;
}
?>
<head>

<script src="js/create_recipe.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<script src="js/nav.js"></script>
<body onload="loadPage()"></body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Recipe Generator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id="home_nav" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="create_nav" href="create_recipe.php">Create Recipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="recipes_nav" href="my_recipes.php">My Recipes</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container" > 
    <div class="row"> 
        <div class="col">
        <form action="php/display_recipe.php" method="GET">
            <input class="form-control" id="username" value="<?php echo $_SESSION['username'];?>" name="username" placeholder="Username">
            <input class="btn btn-outline-secondary" type="submit" name="submit" />
        </form>
        <?php
        if($_SESSION['error_msg']){
          $msg=$_SESSION['username'];
          if($msg!=""){
          echo "<h3>Please select another username. Username: $msg has not yet submitted any recipes.</h3>";
          }
        }
        ?>
        </div>
        </div>
<ul class="nav nav-tabs" id="recipes">
        <?php

        if($_SESSION['username']!=""){
          if(!$_SESSION['error_msg']){
          $array=$_SESSION['ingredient_data'];
          for($i=0;$i<sizeof($array);$i++){
            $label=$array[$i][0]['recipe_id'];
            echo "<form action='php/change_tab.php' method='post'>";
            echo "<input type='hidden' value='$i' name='tab'>";

            echo "<li class=nav-item>";
            if($_SESSION['recipe_id']==$i){
            #echo "<a class='nav-link active'>";

            echo "<input class='nav-link active' type='submit' name='submit' value='$label' />";
            }
            else{
              #echo "<a class=nav-link>";
              echo "<input class='nav-link active' type='submit' name='submit' value='$label' />";
            }
            #echo $array[$i][0]['recipe_id'];
            #echo "</a>";
            echo "</li>";
            
            echo "</form>";
          }
        }
        }
        ?>
</ul>
<div class="container" > 
    <div class="row"> 
        <div class="col">
    <h2 id="recipe_name" align="center">
        <?php

        ?>
    </h2>
        <?php
          if($_SESSION['username']==""){
            if(!$_SESSION['error_msg']){
            echo "<h2>";
            echo "Enter username to view recipes";
            echo "</h2>";
            }
          }
        ?>
    <?php
          if($_SESSION['username']!=""){
            if(!$_SESSION['error_msg']){
            echo "<h4>";
            echo "Ingredients";
            echo "</h4>";
            }
          }
    ?>
    <ol class="list-group" id="ingredients">
        <?php
        if($_SESSION['username']!=""){
            $array=$_SESSION['ingredient_data'][$_SESSION['recipe_id']];
            for($i=0;$i<sizeof($array);$i++){
              echo "<li class=list-group-item>";
              echo $array[$i]['Ingredient'];
              echo "</li>";
            }
          }
          ?>
    </ol>
    <?php
          if($_SESSION['username']!=""){
            if(!$_SESSION['error_msg']){
            echo "<h4>";
            echo "Instructions";
            echo "</h4>";
            }
          }
    ?>
  <ol class="list-group" id="instructions">
          <?php
          if($_SESSION['username']!=""){
            $array=$_SESSION['instruction_data'][$_SESSION['recipe_id']];
            for($i=0;$i<sizeof($array);$i++){
              echo "<li class=list-group-item>";
              echo $array[$i]['Instruction'];
              echo "</li>";
            }
          }
          ?>
  </ol>
  </div>
  </div>
  </div>
  <br>
  <div class="container" > 
    <div class="row"> 
        <div class="col">
          <h3>
            Enter new Recipe Title
          </h3>
        <form action="php/edit_title.php" method="GET">
            <input class="form-control" name="new_title" placeholder="New Recipe Title">
            <input class="btn btn-outline-secondary" type="submit" name="submit" />
        </form>
        </div>
        </div>
  <!-- <div class="container" > 
      <div class="row"> 
          
          <div class="col">
              <button type="button" class="btn btn-primary btn-lg">Edit Recipe</button>
          </div>
          <div class="col"> </div>
        </div>
  </div> -->
    <script src="js/my_recipes.js"></script>