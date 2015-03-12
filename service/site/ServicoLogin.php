<?php


class ServicoLogin
{

    public function logar($usuario,$senha)
    {
       if($usuario == "" or $senha == "")
       {
           echo("Todos os campos são de preenchimento obrigatório.");
       }
       else{
           $result = array();
           $persons = Tb_user::find('all', array('conditions' => array('email = ?', $usuario)));
           foreach ($persons as $p) {
               array_push($result, $p->to_json());
           }
           $result =  implode(",", $result);
           $isDados = json_decode($result, true);
           $isEmail = $isDados['email'];
           $isSenha = $isDados['senha'];
           $isTipo = $isDados['tipo'];

           if($isEmail == $usuario && $isSenha == $senha){
               if($isTipo == "user")
               {
                   $sql  = Tb_user::find('all', array('conditions' => array('email = ? AND senha = ?', $usuario, $senha)));
                   if(count($sql) == 1)
                   {
                       session_start();
                       $_SESSION['usuario'] = $usuario;
                       $_SESSION['senha']   = $senha;
                       $_SESSION['logado']  = true;
                       echo("valido");
                   }

               }
               if($isTipo == "admin")
               {
                   $sql  = Tb_user::find('all', array('conditions' => array('email = ? AND senha = ?', $usuario, $senha)));
                   if(count($sql) == 1)
                   {
                       session_start();
                       $_SESSION['usuario'] = $usuario;
                       $_SESSION['senha']   = $senha;
                       $_SESSION['logado']  = true;
                       echo("validoAdmin");
                   }

               }
           }else{
               echo("invalido");
           }

       }
    }
}
