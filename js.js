function text_state_btn(){
    var text_state = document.getElementById("text_state");
    text_state.style.display = "none";

    var battle_state = document.getElementById("battle_state");
    battle_state.style.display = "inline-block";

    var battle_text = document.getElementById("battle_text");
    battle_text.innerHTML = "What attack do you want to use?";
}