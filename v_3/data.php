<?php


class DataUsers{

	public $server;
	public $statement;
	public $debug = false;
	public $log = true;
	public $last_query = "";
	
    function __construct() {
    	$this->connect();
	}
	
	
	function __destruct() {
		
		
	}
	
	function run_query($qry) {
		
		$this->last_query = $qry;

		$ret = $this->server->query($qry);
		$this->check_error();
		
		return $ret;
	}
	
	public function connect() {
	
		if ($this->debug)
			echo "******* connect start **********<br/>\n";
	
		$this->server = new mysqli("localhost", "root", "", "test_10");
		$this->last_query = "connect to server";
		$this->check_error();
			
		$this->statement = $this->server->stmt_init();
	}
	
	public function check_error() {
		
		if ($this->server->errno) {
			printf("SERVER ERROR: %s", $this->server->error);
			if ($this->log)
				error_log("SERVERERROR: " . $this->server->error);
			
			exit();
		} else
		{
			if ($this->debug) {
				echo "OK qry: $this->last_query<br/>\n";
				echo "OK rows: " . $this->server->affected_rows . " <br>\n";
			}
			
			if ($this->log) {
				error_log("OK qry: $this->last_query");
				error_log("OK rows: " . $this->server->affected_rows);
			}
				
		}
	}
	
	function create_tables() {
	
		$this->run_query("drop table if exists directory");
		$this->run_query(
				"create table directory (
				id bigint auto_increment primary key,
				name varchar(64) not null unique,
				phone varchar(16) not null,
				ptt int
				)"
		);
	
	}
		
	public function insert($rec) {
	   	
		$s  = $this->statement;
		
		$qry = "INSERT INTO directory(name, phone, ptt) values(?, ?, ?)";
		$this->last_query = $qry;
		
		if ($this->debug) {
			var_dump($rec);
		
		}
		
		$s->prepare($qry);
		$s->bind_param("ssi", $rec["name"], $rec["phone"], $rec["ptt"]);
		$s->execute();
		
		$this->check_error();
	}
	
	
	public function get_user($id) {
		
		$qry = "SELECT name, phone, ptt FROM directory 
				WHERE id=?" ;
		
		$this->last_query = $qry;
		
		$s = $this->statement;
		$s ->prepare($qry);
		
		$s->bind_param("i", $id);
		
		$ret = array();
		$s->bind_result($ret["name"], $ret["phone"], $ret["ptt"]);
		
		$s->execute();
		if ($s->fetch())
			return $ret;
		else
			return NULL;
	}
	
	public function get_user_json($id) {
		$ret = $this->get_user($id);

		return json_encode($ret);	
	}
	
	public function insert_id() {	
		//$qrez = $this->run_query("SELECT last_insert_id() as last");
		return $this->server->insert_id;
		
	}
	
	public function get_users_json($offset = 0, $limit = 100000) {

	
		$query = "select id, name, phone, ptt from directory order by name limit ?, ?";
		$this->statement->prepare($query);
		$this->statement->bind_param("ii", $offset, $limit);
		
		
		$this->statement->bind_result($id, $name, $phone, $ptt );
		
		$this->statement->execute();
	    $this->statement->store_result();
	   
	    
	    $ret = array();
	    while ($this->statement->fetch()) {
	         $ret[] = array( "id" => $id, "name" => $name, "phone" => $phone, "ptt" => $ptt);
	    }
	    
	    return json_encode($ret);
	    
	}
	
	public function max_id() {
		
		$qry = "SELECT max(id) as max FROM directory"; 
		$this->last_query = $qry;
		
		$s = $this->statement;
		$s ->prepare($qry);
		
	
		$s->bind_result($max);
		
		$s->execute();
		if ($s->fetch())
			return $max;
		else
			return -1;
		
	}
	
	public function count() {
	
		$qry = "SELECT count(*) FROM directory";
		$this->last_query = $qry;
	
		$s = $this->statement;
		$s ->prepare($qry);
	
	
		$s->bind_result($count);
		$s->execute();
		
		if ($s->fetch())
			return $count;
		else
			return -1;
	
	}
	
	public function test() {		
		if ($this->debug)
		  echo "***********test*******<br/>\n";
	}
	
}


?>