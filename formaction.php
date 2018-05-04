<?php
include_once("connection.php");
include_once("model.php");

$con    = new Connection();
$model  = new Model();

//$model->insert();addNewInvoice

//print_r($_POST);
//exit;

$model->addNewInvoice('',$_POST);

//print_r($_POST['invoice_product']);
$con->closeConnection();
echo '{"status":"Success","message":"Invoice has been created successfully!"}';
 
		
		?>