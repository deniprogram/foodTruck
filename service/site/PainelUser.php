<?php
require_once '../../config/config.php';
class PainelUser
{

    public function updateUser($nome,$email,$senha,$endereco,$telefone,$facebook,$siteUser,$logo,$logoDestaque)
    {
        $result = array();
        $persons = Tb_user::find('all', array('conditions' => array('email = ? AND senha = ?', $email,$senha)));
        foreach ($persons as $p) {
            array_push($result, $p->to_json());
        }
        $result =  implode(",", $result);
        $isDados = json_decode($result, true);
        $isId = $isDados['id'];

        $tableUser = Tb_user::find($isId);

        $tableUser->nome = $nome;
        $tableUser->endereco = $endereco;
        $tableUser->tel = $telefone;
        $tableUser->facebook = $facebook;
        $tableUser->site_user = $siteUser;
        $tableUser->logo = $logo;
        $tableUser->logo_destaque = $logoDestaque;
        $tableUser->save();
        echo "Alteração Concluida";
    }

}


