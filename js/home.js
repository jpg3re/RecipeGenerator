var ingred1=["2 slices of bread", " 2 tablespoons of peanut butter","1 tablespoon of jelly"]
var instr1=["get two pieces of bread","apply peanut butter to one side", "apply jelly to the other side"]
var recipe1={name:"Peanut Butter and Jelly Sandwich", ingredients:ingred1, instructions:instr1};

var ingred2=["3 slices of bread", " 3 tablespoons of peanut butter","2 tablespoon of jelly"]
var instr2=["get 3 pieces of bread","apply peanut butter to one side", "apply jelly to the other side"]
var recipe2={name:"Peanut Butter and Jelly Sandwich version 2", ingredients:ingred2, instructions:instr2};

var ingred3=["4 slices of bread", " 4 tablespoons of peanut butter","4 tablespoon of jelly"]
var instr3=["get 4 pieces of bread","apply peanut butter to one side", "apply jelly to the other side"]
var recipe3={name:"Peanut Butter and Jelly Sandwich version 3", ingredients:ingred3, instructions:instr3};

var currentTab="recipe1";
function selectRecipe(recipe){
    var ul = document.getElementById("recipes");
    var items = ul.getElementsByTagName("li");
    for (var i = 1; i < items.length+1; ++i) {
        recipe_i="recipe"+i
        //document.getElementById("recipe"+i).classList.remove('selected');
        document.getElementById(recipe_i).classList.remove("selected");
        document.getElementById(recipe_i).classList.remove('active');
        if(recipe_i!=recipe)
            document.getElementById(recipe_i).classList.add("selected");

    }
    currentTab=recipe;
    document.getElementById(recipe).classList.add("active");
    
}
function showRecipe(){
    if(currentTab=="recipe1"){
        document.getElementById("recipe_name").innerHTML=recipe1.name;
        
    }
    else if(currentTab=="recipe2"){
        document.getElementById("recipe_name").innerHTML=recipe2.name;
    }
    else{
        document.getElementById("recipe_name").innerHTML=recipe3.name;
    }
    document.getElementById("ingredients_title").innerHTML="Ingredients";
    document.getElementById("instructions_title").innerHTML="Instructions";
    populateIngredientList(currentTab)
    populateInstructionList(currentTab)
    document.getElementById('add_button').classList.remove("hide");
    button.style.display='block';
}
function populateIngredientList(recipe){
        clearList("ingredients")
        var list_data;
        if(recipe=="recipe1")
            list_data=recipe1.ingredients;
        else if(recipe=="recipe2")
            list_data=recipe2.ingredients;
        else 
            list_data=recipe3.ingredients;

        var list = document.getElementById("ingredients");
        for (i=0;i<list_data.length;++i){
            var entry = document.createElement('li');
            entry.className="list-group-item";
            entry.appendChild(document.createTextNode(list_data[i]));
            list.appendChild(entry);
        }
}

function populateInstructionList(recipe){
    clearList("instructions")
    var list_data;
    if(recipe=="recipe1")
        list_data=recipe1.instructions;
    else if(recipe=="recipe2")
        list_data=recipe2.instructions;
    else 
        list_data=recipe3.instructions;

    var list = document.getElementById("instructions");
    for (i=0;i<list_data.length;++i){
        var entry = document.createElement('li');
        entry.className="list-group-item";
        entry.appendChild(document.createTextNode(list_data[i]));
        list.appendChild(entry);
    }

}
function clearList(id){
    var list = document.getElementById(id);
    while (list.hasChildNodes()) {   
        list.removeChild(list.firstChild);
    }
}