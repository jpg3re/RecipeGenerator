function updateNavBar(){
    document.getElementById("create_nav").classList.remove('active');
    document.getElementById("home_nav").classList.remove('active');
    document.getElementById("recipes_nav").classList.remove('active');

    var sPath = window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
    console.log(sPage);
    if(sPage=="index.html"){
        document.getElementById("home_nav").classList.add('active');
        console.log("index")
    }
    else if(sPage=="create_recipe.html"){
        document.getElementById("create_nav").classList.add('active');
        console.log("create")

    }
    else{
        document.getElementById("recipes_nav").classList.add('active');
        console.log("recipes")

    }
}