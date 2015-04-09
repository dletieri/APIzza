<?php
require 'Slim/Slim.php';
require_once '../customer.php';
require_once '../gateway.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'log.enabled' => true,
    'debug' => true
));

$app->response()->header('Content-Type', 'application/json;charset=utf-8');

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->post('/customer','addCustomer');

$app->run();


function addCustomer()
{


	$request = \Slim\Slim::getInstance()->request();

	$json = $request->getBody();
	$cust = new customer($json);

	$gw = new gateway();
	echo $resp=  $gw->save($cust);

	//echo '{"id": "1", "mainContact":"", "mainPhone":"", "mainAddress":""}';

	




	//$app->$log->debug(var_dump($request->getBody())); 
	//$cust = new customer('{"id": "", "mainContact":"", "mainPhone":"", "mainAddress":""}');
	//echo $gw->save($test);
	//echo $gw->save($test2);

	//echo $resp;
	//echo '{"id": "", "mainContact":"", "mainPhone":"", "mainAddress":""}';

	//$produto = json_decode($request->getBody());
	//$sql = "INSERT INTO produtos (nome,preco,dataInclusao,idCategoria) values (:nome,:preco,:dataInclusao,:idCategoria) ";
	// $conn = getConn();
	// $stmt = $conn->prepare($sql);
	// $stmt->bindParam("nome",$produto->nome);
	// $stmt->bindParam("preco",$produto->preco);
	// $stmt->bindParam("dataInclusao",$produto->dataInclusao);
	// $stmt->bindParam("idCategoria",$produto->idCategoria);
	// $stmt->execute();
	// $produto->id = $conn->lastInsertId();
	//echo json_encode($produto);
}

?>