<?php

class CoreMobile
{
//Exemplo
    public function createFoodTruck($nome,$email)
    {
        $data = array(
            "nome"=>$nome,
            "email"=>$email
        );

        Tb_user::create($data);

        $resul = array("mensagem" => "Cadastrado com sucesso" );
        echo json_encode($resul);
    }

}
