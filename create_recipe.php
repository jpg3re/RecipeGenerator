<!-- Jack Girerd jpg3re -->
<?php
  session_start();
if (isset($_SESSION['recipe'])) {
  #$_SESSION['recipe'] = "Enter Recipe Name";
  #$_SESSION['user'] = "Enter username";
}else{
  $_SESSION['recipe'] = "";
  $_SESSION['user'] = "";
  $_SESSION['placeholder']="";
  $ingredient_array=array();
  $_SESSION['ingredients']=$ingredient_array;
  $_SESSION['ingredient_error']=FALSE;
  $_SESSION['instruction_error']=FALSE;
  $_SESSION['recipe_error']=FALSE;
  $instruction_array=array();
  $_SESSION['instructions']=$instruction_array;

}
?>
<script src="js/nav.js"></script>
<body onload="updateNavBar()"></body>



<script src="js/create_recipe.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Recipe Generator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id="home_nav" href="index.html">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="create_nav" href="create_recipe.php">Create Recipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="recipes_nav" href="my_recipes.php">My Recipes</a>
        </li>
      </ul>
    </div>
  </nav>
  <h1 align="center">Create a New Recipe for <?php echo $_COOKIE['user'];?></h1>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
          <form action="php/add_ingredient.php" method="post">
              <div class="form-group">
                <h4>
                  Recipe Title:
                </h4>
                <?php
                if($_SESSION['recipe_error']){
                  echo "<h5 style='color:red;'>Please enter a Recipe Title </h5>";
                }
              ?>
                <input class="form-control" id="title" name="title" placeholder="Recipe Title" value="<?php echo $_SESSION['recipe'];?>">
                <input class="form-control" type="hidden" id="user" value="<?php echo $_COOKIE['user'];?>" name="user" placeholder="Username">


              </div>
              
              <h4>
                Ingredients
              </h4>
              <?php
                if($_SESSION['ingredient_error']){
                  echo "<h5 style='color:red;'>Please enter an ingredient </h5>";
                }
              ?>
              <ol class="list-group" id="ingredients">
                  <?php
                    $array=$_SESSION['ingredients'];
                    for($i=0;$i<sizeof($array);$i++){
                       echo "<li class=list-group-item>";
                       echo $array[$i];
                       echo "</li>";
                      }
                  ?>
              </ol>
              <div class="input-group mb-3" >
                <div class="input-group-append">
                <input class="form-control" id="ing" name="ing" placeholder="Ingredient" value="<?php echo $_SESSION['placeholder'];?>">
                
                </div>
                <input class="btn btn-outline-secondary" value="Add" type="submit" name="submit" />
              </div>
          </form>
        </div>
        <div class="col">
            <h4>
                    Instructions
            </h4>
            <?php
                if($_SESSION['instruction_error']){
                  echo "<h5 style='color:red;'>Please enter an instruction </h5>";
                }
              ?>
            <div class="list-group">
            <ol class="list-group" id="instructions">
                  <?php
                    $array=$_SESSION['instructions'];
                    for($i=0;$i<sizeof($array);$i++){
                       echo "<li class=list-group-item>";
                       echo $array[$i];
                       echo "</li>";
                      }
                  ?>
              </ol>
            </div>
            <div class="input-group mb-3">
            <form action="php/add_instruction.php" method="post">
                <div class="input-group-append">
                  <input name="instruction_input"type="text" class="form-control" placeholder="Instruction" value="<?php echo $_SESSION['placeholder'];?>">

                  <input class="btn btn-outline-secondary" value="Add" type="submit" name="submit" />
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="container" > 
    <div class="row"> 
    <div class="col">
      <form action="php/add_recipe.php" >
        <input class="btn btn-outline-secondary" value="Submit Recipe" type="submit" name="submit"/>
         
      </form>
      </div>
    </div>
</div>


<script src="js/create_recipe.js"></script>
