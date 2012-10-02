<?php

include 'data.php';



class Request {

	public $data;

	function __construct() {

		$this->data = new DataUsers();

	}

	function __destruct() {
		
		$this->data->statement->close();
		$this->data->server->close();
		
	}
	
	function handle_request() {
		
		if (!isset($_REQUEST["req"]))
           exit();
		
		
		switch ($_REQUEST["req"]) {
			
			case "insert":
			   $this->insert_request();
			   break;
			
			case "get":
				$this->get_request();
				break;
				
			default:
			    break;
		}

	}
	
	// -----------------------------------------------
	function insert_request() {
		
		$rec = json_decode($_REQUEST["rec"], TRUE);
		
		if ($this->data->log) {
			//echo "json_decode:";
			error_log(var_export($rec, TRUE));
		}
		
		
		$this->data->insert($rec);
		$last = $this->data->insert_id();
		
		$ret = ARRAY( "id" => $last);
		
		header('Content-Type: application/json');
		
		//ovo bi trebali proslijediti ako zelimo da javascript primi error status
		//header('HTTP/1.1 500 Internal Server ERROR');
		echo json_encode($ret);
		
	}
	
	
	function get_request() {
	
		// http://localhost/jquery/data_service.php
		// ?req=get&rec={%22id%22:1}
		// ?req=get&rec={"id":1}
		// ?rec=get&rec={"id":"1"}
		
		$rec = json_decode($_REQUEST["rec"], TRUE);
		
		if ($this->data->log) {
			error_log($_REQUEST["rec"]);
			error_log("rec:" . http_build_query($rec));
		}
		
		
		if ($this->data->debug) {
			echo "json_decode:";
			var_dump($rec);
		}
	
		$id = $rec["id"];
		
		$json = $this->data->get_user_json($id);
		
		if ($this->data->log) {
			error_log("json: " . $json);
		}
	
		$id = $rec["id"];
		
		header('Content-Type: application/json');
		echo  $json;
		
	}

}


$req = new Request();
$req->handle_request();

?>