var text_state = document.getElementById("text_state");
var option_state = document.getElementById("options_state");
var battle_state = document.getElementById("battle_state");
var option_text = document.getElementById("options_text");
var battle_text = document.getElementById("battle_text");

function text_state_btn(){
    
    text_state.className = "invisibleState";
    option_state.className = "visibleState";
    
    option_text.innerHTML = "What do you want to do?";
}

function showFightOptions(){
    option_state.className = "invisibleState";
    battle_state.className = "visibleState";
    battle_text.innerHTML = "What move do you want to use?"
}