<?php

class Db {
	
	public $my;
	public $stmt;
	public $debug = true;
	
	public $fields = "firstname, lastname, birthday, email, password";
	
	
	function __construct() {
		$this->connect();
	}
	
	function __destruct() {
		
		$this->my->close();		
	}
	
	function connect() {
		
		$this->my = new mysqli("localhost", "root", "", "test_10");
		$my = $this->my;
		
		$this->check_err("connect database");
		
		$this->stmt = $my->stmt_init();
	}
	
	function report_error($msg) {
		
		error_log($msg);
		
		if ($this->debug)
		   echo $msg;
		
	}
	
	function check_err($qry) {
	   $my = $this->my;
	   
	   if ($my->errno) {
	   	  $msg = "SERVER ERROR: " . $my->error;
	      $this->report_error($msg);
	      
	      if (isset($qry))
	        $msg = "ERR QRY:" . $qry;
	        error_log($msg);
	   }
	    
	}
	
	function run_query($qry) {
		$my = $this->my;
		
		$my->query($qry);
		$this->check_err($qry);
		
	}
	
	function create_tables() {
		
		// prvo se mora brisati tabela sa FK
		$this->run_query("drop table if exists messages");
		
		$this->run_query("drop table if exists users");
	    $this->run_query("create table users 
	    		(userid bigint auto_increment primary key,
	    		firstname varchar(100) not null,
	    		lastname varchar(100) not null,
	    		birthday datetime,
	    		sex char(5),
	    		password varchar(20),
	    		email varchar(100) not null unique)");	
	
		
	   
	    $this->run_query("create table messages (
	    		msgid bigint auto_increment primary key,
	    		msg text not null,
	    		userid bigint not null,
	    		FOREIGN KEY(userid) references users(userid)
	    		)");
		
	}
	
	function insert_id () {
		return $this->my->insert_id;	
	}
	
	
	function insert($row) {
		
		$stmt = $this->stmt;
		
		if ($this->debug)
			$this->report_error("insertujem rec: " . var_export($row, TRUE)); 
		
		$query = "insert into users($this->fields) values(?, ?, ?, ?, ?)";
		
		$stmt->prepare($query);
		$stmt->bind_param("sssss", $row["firstname"], $row["lastname"], $row["birthday"],
				 $row["email"], $row["password"]);
		
		$stmt->execute();
		
		$this->check_err($query);
		
		if ($stmt->affected_rows < 1) {
			$this->report_error("ERR: insert nije uspjesan:" . var_export($row, TRUE));
		}
			
	}
	

	
	function get_user($id) {
		
		$query = "SELECT $this->fields FROM users WHERE userid = ?";
		
		$this->stmt->prepare($query);
		$this->stmt->bind_param("i", $id);
		$this->stmt->bind_result($firstname, $lastname, $birthday, $email, $password);
		$this->stmt->execute();
		
		$this->check_err($query);
		
		$this->stmt->fetch();
		
		$row = array( "firstname" => $firstname, "lastname" => $lastname, 
				"birthday" => $birthday, "email" => $email, "password" => $password);
		
		return $row;
	}
	
	
	function insert_message($userid, $msg) {
			
		$stmt = $this->stmt;
	
		if ($this->debug)
			$this->report_error("insertujem msg: $userid $msg");
	
		$query = "insert into messages(userid, msg) values(?, ?)";
	
		$stmt->prepare($query);
		$stmt->bind_param("is", $userid, $msg);
	
	
		$stmt->execute();
		$this->check_err($query);
	
		if ($stmt->affected_rows < 1) {
			$this->report_error("ERR: insert message: $userid $msg");
	
		}
	}
}

?>