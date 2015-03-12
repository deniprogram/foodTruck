<?php

require_once 'ServicoLogin.php';
require_once 'PainelUser.php';
$isAction = $_POST['isAction'];

if($isAction == "login")
{
    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];

    $user = new ServicoLogin();
    $user->logar($usuario,$senha);
}

if($isAction == "alterarUser")
{
    $editNome         = $_POST['nome'];
    $editEmail        = $_POST['email'];
    $editSenha        = $_POST['senha'];
    $editEndereco     = $_POST['endereco'];
    $editTelefone     = $_POST['telefone'];
    $editFacebook     = $_POST['facebook'];
    $editSite         = $_POST['site'];
    $editLogo         = $_POST['logo'];
    $editImagemdestaque  = $_POST['imagemdestaque'];

    $panelUser = new PainelUser();
    $panelUser->updateUser($editNome,$editEmail,$editSenha,$editEndereco,$editTelefone,$editFacebook,$editSite,$editLogo,$editImagemdestaque);
}
if($isAction == "sair"){
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    $_SESSION['logado']  = false;


}
