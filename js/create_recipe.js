var ingredient_list = document.getElementById('ingredients');
function addIngredient(){
    var element=document.getElementById('ingredient_input')
    var ingredient = element.value;
    if(ingredient!=""){
        var entry = document.createElement('li');
        entry.className="list-group-item";
        entry.appendChild(document.createTextNode(ingredient));
        ingredient_list.appendChild(entry);
        element.value=""
    }
}

var instruction_list = document.getElementById('instructions');
function addInstruction(){
    var element=document.getElementById('instruction_input');
    var instruction = element.value;
    if(instruction!=""){
        var entry = document.createElement('li');
        entry.className="list-group-item";
        entry.appendChild(document.createTextNode(instruction));
        instruction_list.appendChild(entry);
        element.value=""
    }
}
