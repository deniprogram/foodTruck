$(document).ready(function(){

    $(".alterarUser").click(function(){
        /**
         * Valores dos campos Usuario,Senha
         * @type {*|jQuery|HTMLElement}
         */
        var isAction   = "alterarUser"
        var nome = $("#nomeFoodTruck").val();
        var email   = $("#email").val();
        var senha = $("#senha").val();
        var endereco = $("#endereco").val();
        var telefone = $("#telefone").val();
        var facebook = $("#facebook").val();
        var site = $("#site").val();
        var logo = $("#logo").val();
        var imagemdestaque = $("#imagemdestaque").val();
        var mensagemPainelSucesso = $(".mensagesndePainelUser");

        $.ajax({
                type:"POST",
                url:"service/site/ReceivingData.php",
                data:{isAction:isAction,nome:nome,email:email,senha:senha,endereco:endereco,telefone:telefone,facebook:facebook,site:site,logo:logo,imagemdestaque:imagemdestaque},
                dataType:"html",
                beforeSend:function(){

                },
                error:function(){

                },
                complete:function(){

                }
            }).done(function(coment){
                mensagemPainelSucesso.fadeIn();
                mensagemPainelSucesso.fadeOut(5000);
            });


    });

    $(".sair").click(function(){
        var isAction   = "sair"
        $.ajax({
            type:"POST",
            url:"service/site/ReceivingData.php",
            data:{isAction:isAction},
            dataType:"html"
        }).done(function(coment){
            location.href="index.html"
        });
    });

    $.getJSON('service/site/lerDadosUser.php', function(data) {
        $("#nomeFoodTruck").val(data.nome);
        $("#email").val(data.email);
        $("#senha").val(data.senha);
        $("#endereco").val(data.endereco);
        $("#telefone").val(data.tel);
        $("#facebook").val(data.facebook);
        $("#site").val(data.siteuser);
        $("#logo").val(data.logo);
        $("#imagemdestaque").val(data.logo_destaque);
    });
});