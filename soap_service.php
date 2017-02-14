<?php
	require_once('Students.php');	
	$option = array("uri"=>"http://localhost");
	$server=new SoapServer(null,$options);
	$server->setClass('Students');
	$server->handle();
?>