function HabilitarBoton(){
    text_1 = document.getElementById("txt_1").value;
    val = 0;

    if(text_1 == "1007476"){
        val++;
    }
    if(val == 0){
        document.getElementById("txt_2").disabled = true;
    }
    else{
        document.getElementById("txt_2").disabled = false;
    }
}
document.getElementById("txt_1").addEventListener("keyup", HabilitarBoton);