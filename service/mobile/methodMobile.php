<?php
require_once 'IncludeDependence.php';

/*
* Metodo de conexao com o banco de dados
*/
function getConn()
{
    return new PDO('mysql:host=localhost;dbname=basefoodtruck', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

/*
 * Esse Metodo que lista todos Foot-Trucks
 */
function getfoodTrucks()
{
    $stmt = getConn()->query("SELECT * FROM tb_user");
    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "{Usuarios:".json_encode($users)."}";
}

/**
 * Esse metodo Lista apenas um Food-Truck
 */
function getfoodTruck()
{
    $request = \Slim\Slim::getInstance()->request();

    $id           = $request->post('id');

    $sql = "select * from tb_user where id = :id";
    $conn = getConn();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam("id",$id);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($res);

}

/**
 * Esse metodo Cadastra um Food-Truck
 */
function addFoodTruck()
{
    $request = \Slim\Slim::getInstance()->request();
    $nome           = $request->post('nome');
    $email          = $request->post('email');

    CoreMobile::createFoodTruck($nome,$email);
}

function indexHome()
{
    echo("Home");
}
