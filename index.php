<?php
$option=array("location"=>
				"http://localhost/ws/soap_service.php"
				"uri"=>"http://localhost");
	try{
		$client=new SoapClient(null,$option);
		$students=$client->getStudentNames();
		echo $students;
	}
	catch(SoapFault $ex){
		var_dump($ex);
	}
				
?>