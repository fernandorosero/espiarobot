function enviarForm(){
    document.loginSend.submit();
}
function enviarFormLocal(){
    document.loginSendLocal.submit();
}
function enviarFormWeb(){
    document.loginSendWeb.submit();
}
function volverLogin(){
    document.loginreturn.submit();
}
function volverContacto(){
    document.contactoreturn.submit();
}
function volverIndex(){
    document.returnIndex.submit();
}

/*********PYTHON******************/
function PruebaLed(){
    $.ajax({
          
           url:'php_python/web_left_right.php',
           type:'POST',
           success: function(response){
             
             alert("very nice");
           },
           error: function(){
               alert("no junjona ajax!!!!");
           }
        });
}
/*********PYTHON*************/
