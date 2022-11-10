function HabilitarBoton(){
    text_1 = document.getElementById("txt_1").value;
    val = 0;

    if(text_1 == "1007476"){
        val++;
    }
    if(val == 0){
        document.getElementById("btn").disabled = true;
    }
    else{
        document.getElementById("btn").disabled = false;
    }
}
document.getElementById("txt_1").addEventListener("keyup", HabilitarBoton);