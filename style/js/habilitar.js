function HabilitarBoton(){
    text_1 = document.getElementById("txt_1").value;
    val = 0;

    if(text_1 == "1007476"){
        val++;
    }
    if(val == 0){
        document.getElementById("btn").disabled = true;
        document.getElementById("flexRadioDefault1").disabled = true;
        document.getElementById("flexRadioDefault2").disabled = true;
        document.getElementById("flexRadioDefault3").disabled = true;
    }
    else{
        document.getElementById("btn").disabled = false;
        document.getElementById("flexRadioDefault1").disabled = false;
        document.getElementById("flexRadioDefault2").disabled = false;
        document.getElementById("flexRadioDefault3").disabled = false;
    }
}
document.getElementById("txt_1").addEventListener("keyup", HabilitarBoton);