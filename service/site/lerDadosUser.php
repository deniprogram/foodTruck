<?php
header('Content-Type: application/json');
require_once '../../config/config.php';

session_start();
$user = $_SESSION['usuario'];
$result = array();
$persons = Tb_user::find('all', array('conditions' => array('email = ?', $user)));
foreach ($persons as $p) {
    array_push($result, $p->to_json());
}
$result =  implode(",", $result);
echo $result;