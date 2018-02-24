$(document).ready(function(){
    hideClassError();
    $("#senha1").keyup(validate);     
      
});


function validate(){
    var senha = $('#senha').val();
    var senha1 = $('#senha1').val();
    if( senha != senha1){
        $('.mensagem-erro').addClass('has-error');
        disableButtonEnviar();
        showClassError();
        clear();
    }else{
        $('.mensagem-erro').removeClass('has-error');
        enabledButtonEnviar();
        hideClassError();
    }
}

function disableButtonEnviar(){
   $('.btn-cadastrar-usuario').attr('disabled', 'disabled'); 
}

function enabledButtonEnviar(){

    event.preventDefault();
    $('.btn-cadastrar-usuario').prop("disabled", false);
 }

 function hideClassError(){
    $('.msg-password').hide();
 }

 function showClassError(){
    $('.msg-password').show();
 }

 function clear(){
    $('#senha').focus(
        function(){
            $(this).val('');
        });
    $('#senha1').focus(
            function(){
                $(this).val('');
    });
 }