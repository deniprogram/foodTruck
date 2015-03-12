$(document).ready(function(){

$(".logarUser").click(function(){

/**
* Valores dos campos Usuario,Senha
* @type {*|jQuery|HTMLElement}
*/
var isAction   = "login"
var usuario = $(".usuario").val();
var senha   = $(".senha").val();
var imgLoad = $(".loginLoad");
var mensagemErro = $(".mensagenserro");
var mensagemErroLogin = $(".mensagenserro2");
var mensagemErroLoginTwe = $(".mensagenserro3");

if(usuario == "" || senha == "")
{
    mensagemErroLogin.fadeIn();
    mensagemErroLoginTwe.fadeOut();
 n();
    return false;
}else{
    $.ajax({
        type:"POST",
        url:"service/site/ReceivingData.php",
        data:{isAction:isAction,usuario:usuario,senha:senha},
        dataType:"html",
        beforeSend:function(){
            imgLoad.fadeIn();
            mensagemErroLoginTwe.fadeOut();
        },
        error:function(){
            mensagemErro.fadeIn();
        },
        complete:function(){
            imgLoad.hide();
        }
    }).done(function(coment){
            if(coment == "valido"){
                location.href="user.php"
            }else if(coment == "validoAdmin"){
                location.href="statisticas.html"
            }else if(coment == "invalido"){
                mensagemErroLogin.fadeOut();
                mensagemErroLoginTwe.fadeIn();
            }
    });
}

});
});
