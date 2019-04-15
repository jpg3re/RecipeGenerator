<!-- Jack Girerd jpg3re -->

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
        
<ul class="nav nav-tabs" id="recipes">
        <li class="nav-item">
          <a class="nav-link active" id= "recipe1" onclick=changeTab(this.id)>Recipe 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="recipe2" onclick=changeTab(this.id)>Recipe 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="recipe3" onclick=changeTab(this.id)>Recipe 3</a>
        </li>
</ul>
<div class="container" > 
    <div class="row"> 
        <div class="col">
    <h2 id="recipe_name" align="center">
      Recipe Name
    </h2>
    <h4>
        Ingredients
    </h4>
    <ol class="list-group" id="ingredients">
           
    </ol>

    <h4>
      Instructions
  </h4>
  <ol class="list-group" id="instructions">
         
  </ol>
  </div>
  </div>
  </div>
  <br>
  <div class="container" > 
      <div class="row"> 
          
          <div class="col">
              <button type="button" class="btn btn-primary btn-lg">Edit Recipe</button>
          </div>
          <div class="col"> </div>
        </div>
  </div>
    <script src="js/my_recipes.js"></script>