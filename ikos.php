<?php

require 'dependencies.php';
use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

Class Ikos {
	private $db;
	
	public function __construct(){	
		$this->db = getDB();
	}

	public function welcome() {
		echo "Hello World";
	}
 	
 	public function showUser() {
 		$sql 	= 'select * from `ikos-user`';
 		$result	= $this->db->query($sql);
		$num 	= mysqli_num_rows($result);

		if($num >= 1) {
			$data = array();
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				array_push( $data, $row );
			}	
		} else {
			$data = '';
		}

 		$return = array(
 				'code'			=> 200,
 				'message'		=> 'GET ALL USER SUCCESS',
 				'data' 			=> $data 
 				);
 		echo json_encode( $return );
 	}	
}

?>