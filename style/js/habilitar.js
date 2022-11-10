function HabilitarBoton(){
    text_1 = document.getElementById("txt_1").value;
    val = 0;

    if(text_1 == ""){
        val++;
    }
    if(val == 1){
        document.getElementById("btn").disabled = false;
    }
    else{
        document.getElementById("btn").disabled = true;
    }
}
document.getElementById("txt_1").addEventListener("keyup", HabilitarBoton);
document.getElementById("txt_1").addEventListener("change", HabilitarBoton);