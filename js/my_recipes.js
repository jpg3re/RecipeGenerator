function loadPage(){
    changeTab("recipe1");
    updateNavBar();
    loadTabs();
}

function changeTab(tab){
    var ul = document.getElementById("recipes");
    var items = ul.getElementsByTagName("li");
    for (var i = 1; i < items.length+1; ++i) {
         document.getElementById("recipe"+i).classList.remove('active');
    }
    document.getElementById(tab).classList.add('active');
    changeData(tab)
}
var ingred1=["2 slices of bread", " 2 tablespoons of peanut butter","1 tablespoon of jelly"]
var instr1=["get two pieces of bread","apply peanut butter to one side", "apply jelly to the other side"]
var recipe1={name:"Peanut Butter and Jelly Sandwich", ingredients:ingred1, instructions:instr1};

var ingred2=["3 slices of bread", " 3 tablespoons of peanut butter","2 tablespoon of jelly"]
var instr2=["get 3 pieces of bread","apply peanut butter to one side", "apply jelly to the other side"]
var recipe2={name:"Peanut Butter and Jelly Sandwich version 2", ingredients:ingred2, instructions:instr2};

var ingred3=["4 slices of bread", " 4 tablespoons of peanut butter","4 tablespoon of jelly"]
var instr3=["get 4 pieces of bread","apply peanut butter to one side", "apply jelly to the other side"]
var recipe3={name:"Peanut Butter and Jelly Sandwich version 3", ingredients:ingred3, instructions:instr3};

function changeData(tab){
    if(tab=="recipe1"){
        document.getElementById("recipe_name").innerHTML=recipe1.name;
        
    }
    else if(tab=="recipe2"){
        document.getElementById("recipe_name").innerHTML=recipe2.name;
    }
    else{
        document.getElementById("recipe_name").innerHTML=recipe3.name;
    }
    populateIngredientList(tab)
    populateInstructionList(tab)
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
function loadTabs(){
    var ul = document.getElementById("recipes");
    var items = ul.getElementsByTagName("li");
    var tab= (index,name) => {return document.getElementById("recipe"+index).innerHTML=name}
    for (var i = 1; i < items.length+1; ++i) {
        if(i==1)
            tab1=tab(i,recipe1.name)
        else if(i==2)
            tab2=tab(i,recipe2.name)
        else
            tab3=tab(i,recipe3.name)
    }
}
function clearList(id){
    var list = document.getElementById(id);
    while (list.hasChildNodes()) {   
        list.removeChild(list.firstChild);
    }
}