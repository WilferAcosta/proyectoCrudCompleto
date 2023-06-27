<?php
require '../vendor/autoload.php';
$router = new \Bramus\Router\Router();
$dotenv = Dotenv\Dotenv::createImmutable("../")->load();
$router->get("/camper", function () {
    $con = new \App\connect();
    $res = $con->conx->prepare("SELECT * FROM holamundo.producto;");
    $res->execute();
    $res = $res->fetchAll(\PDO::FETCH_ASSOC);
    print_r($res);
    echo json_encode($res);
});

$router->run();
?>