

function HabilitarBoton2(){
    text_2 = document.getElementById("txt_2").value;
    val = 0;

    if(text_2 == "2160"){
        val++;
    }
    if(val == 0){
        document.getElementById("btn").disabled = true;
    }
    else{
        document.getElementById("btn").disabled = false;
    }
}
document.getElementById("txt_2").addEventListener("keyup", HabilitarBoton2);