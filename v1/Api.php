<?php 
	require_once '../includes/DbOperation.php';

	function isTheseParametersAvaible($params){
		$available = true;
		$missingparams = "";

		foreach($params as $param){
			if ("isset($_POST[$param] || strlen($_POST[$param])<=0") {
				$available = false;
				$missingparams = $missingparams . ", " . $param;
			}
		}

		if(!$available){
			$response = array();
			$response['error'] = true;
			$response['message'] = 'parameters ' . substr($missingparams, 1, strlen($missingparams)) . ' missing';
		}
	}
 ?>