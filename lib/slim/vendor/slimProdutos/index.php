<?php

require_once '../slim/slim/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->response()->header('Content-Type', 'application/json;charset=utf-8');

$app->get('/', function () {
 echo "Home";
});

$app->get('/users','getUser');

$app->post('/produtos','addProduto');

$app->post('/verdados','verDados');

$app->run();

/*
* Metodo de conexao com o banco de dados
*/
function getConn()
{
 return new PDO('mysql:host=localhost;dbname=basefoodtruck', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

/*
 * Metodo que lista todos users
 */
function getUser()
{
 $stmt = getConn()->query("SELECT * FROM tb_user");
 $users = $stmt->fetchAll(PDO::FETCH_OBJ);
 echo "{Usuarios:".json_encode($users)."}";
}

function addProduto()
{
    $request = \Slim\Slim::getInstance()->request();
    //$produto = var_dump($request->post());

    $nome           = $request->post('nome');
    $preco          = $request->post('preco');
    $dataInclusao   = $request->post('dataInclusao');
    $idCategoria    = $request->post('idCategoria');

    $sql = "INSERT INTO produtos (nome,preco,dataInclusao,idCategoria) values (:nome,:preco,:dataInclusao,:idCategoria) ";
    $conn = getConn();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam("nome",$nome);
    $stmt->bindParam("preco",$preco);
    $stmt->bindParam("dataInclusao",$dataInclusao);
    $stmt->bindParam("idCategoria",$idCategoria);
    $stmt->execute();

    echo json_encode($request->post());
}

 function verDados(){

    $request = \Slim\Slim::getInstance()->request();
    //$produto = var_dump($request->post());

    $id           = $request->post('id');

    $sql = "select * from produtos where id = :id";
    $conn = getConn();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam("id",$id);
    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo json_encode($res);

}

    
?>