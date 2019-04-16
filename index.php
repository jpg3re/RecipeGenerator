<!-- Jack Girerd jpg3re -->
<head>
<script src="js/nav.js"></script>
<body onload="updateNavBar()"></body>
<script src="js/create_recipe.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/home.css">
</head>
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
          <a class="nav-link" id="recipes_nav" href="my_recipes.php">My Recipes</a>
        </li>
      </ul>
    </div>
  </nav>
<body>
  <h1 align="center">Welcome To Recipe Generator&trade;</h1>
  <br>
  <h3 align="center">View Sample Recipes:</h3>
  <div class="container">
    <div class="row">
      <div class="col">
          <ul class="list-group" id="recipes">
            <li class="list-group-item selected" id="recipe1" onclick=selectRecipe(this.id)>Recipe 1</li>
            <li class="list-group-item selected" id="recipe2" onclick=selectRecipe(this.id)>Recipe 2</li>
            <li class="list-group-item selected" id="recipe3" onclick=selectRecipe(this.id)>Recipe 3</li>
          </ul>
      </div>
    </div>
  </div>
  <br>

  <div class="container" > 
      <div class="row"> 
          
          <div class="col">
              <button type="button" class="btn btn-primary btn-lg" onclick=showRecipe()>Show Sample Recipe</button>
          </div>
          <div class="col"> </div>
        </div>
  </div>

  <div class="container" > 
      <div class="row"> 
          <div class="col">
      <h2 id="recipe_name" align="center">
      </h2>
      <h4 id="ingredients_title">
      </h4>
      <ol class="list-group" id="ingredients">
             
      </ol>
  
      <h4 id="instructions_title">
    </h4>
    <ol class="list-group" id="instructions">
           
    </ol>
    </div>
    </div>
    </div>
    <button type="button" class="btn btn-primary btn-lg hide" id="add_button">Add Sample Recipe</button>
  </body>
  <script src="js/home.js"></script>