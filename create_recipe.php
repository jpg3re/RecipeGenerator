<!-- Jack Girerd jpg3re -->
<?php
session_start();
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
          <a class="nav-link" id="recipes_nav" href="my_recipes.html">My Recipes</a>
        </li>
      </ul>
    </div>
  </nav>
  <h1 align="center">Create a New Recipe</h1>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
          <form action="php/add_ingredient.php" method="post">
            <div class="form-group">
                <h4>
                  Recipe Title:
                </h4>
                <input class="form-control" id="title" name="title" placeholder="Example Title">
                <h4>
                    User:
                  </h4>
                  <input class="form-control" id="user" name="user" placeholder="Username">
            </div>
        <h4>
            Ingredients
        </h4>
        <ol class="list-group" id="ingredients">
                
        </ol>
        <div class="input-group mb-3" >
          
                <input name="ingredient_input" id="ingredient_input" type="text" class="form-control" placeholder="Ingredient" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" onclick="addIngredient()">Add</button>
                </div>
                <input type="submit" name="submit" onclick="addIngredient()"/>
          </form>
        </div>
        </div>
        <div class="col">
            <h4>
                    Instructions
            </h4>
            <div class="list-group">
                    <ol class="list-group" id="instructions">
                    </ol>
            </div>
            <div class="input-group mb-3">
                <input id="instruction_input"type="text" class="form-control" placeholder="Instruction" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="addInstruction()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" > 
    <div class="row"> 
        
        
        <div class="col"> </div>
      </div>
</div>


<script src="js/create_recipe.js"></script>