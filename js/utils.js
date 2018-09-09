$(document).ready(function(){
        inicioServoLeftRight = 7.5;
        inicioServoUpDown = 7.5;
	leftRightServo(inicioServoLeftRight);
	
});
function leftRightServo(inicioServoLeftRight){
    alert ("El valor de leftRight :: " + inicioServoLeftRight);
    $.ajax({
        url : 'php_python/web_left_right.php',
        type : 'POST',
        data: {arg : inicioServoLeftRight},
        success: function(response) {
            alert ("Llamada OK!!!");
        },
        error: function() {
            alert ("No funciona!!!");
        }
    });
}
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
          
           url:'php_python/prueba_led.php',
           type:'POST',
           success: function(response){
             
             //alert("very nice");
           },
           error: function(){
               //alert("no junjona ajax!!!!");
           }
        });
}
function WebLeftRightServoMotor(){
    $.ajax({
        url: 'php_python/servo_left_right.py',
        type: 'POST',
        succes: function(response){
            
        },
        error: function(){
            
        }
    });
}
function WebUpDownServoMotor(){
    $.ajax({
        url: 'php_python/servo_up_down.py',
        type: 'POST',
        succes: function(response){
            
        },
        error: function(){
            
        }
    });
}
/*********PYTHON*************/
