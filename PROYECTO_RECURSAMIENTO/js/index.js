function admin(){
    document.getElementById("admin").style.display="block";
    document.getElementById("user").style.display="none";
    document.getElementById("sing_up").style.display="none";
    document.getElementById("sing_in1").style.display="none";
    document.getElementById("sing_up1").style.display="none";
}
function user(){
    document.getElementById("admin").style.display="none";
    document.getElementById("user").style.display="block";
    document.getElementById("sing_up").style.display="none";
    document.getElementById("sing_in1").style.display="none";
    document.getElementById("sing_up1").style.display="none";
}
function sing_up(){
    document.getElementById("sing_up").style.display="block";
    document.getElementById("sing_in1").style.display="none";
    document.getElementById("sing_up1").style.display="none";
}
function sing_in1(){
    document.getElementById("sing_up").style.display="none";
    document.getElementById("sing_in1").style.display="block";
    document.getElementById("sing_up1").style.display="none";
}
function sing_up1(){
    document.getElementById("sing_up").style.display="none";
    document.getElementById("sing_in1").style.display="none";
    document.getElementById("sing_up1").style.display="block";
}
input-text.addEventListener("keydown", function(event){
    if (input-text.value.length > 10){
        event.preventDefault();
    }
});