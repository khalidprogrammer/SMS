<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_user extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function validate_username($username=null){
		
		if($username){
		$sql="SELECT * FROM users WHERE username=?";
		$query=$this->db->query($sql,array($username));
		$result=$query->row_array();
		return ($query->num_rows() == 1) ? true: false;
	}
	else{
		return false;
	}
	}

	function login($username='',$password=''){
		 if($username && $password){
		 	$sql="SELECT * FROM  users WHERE username= ? AND password= ?";
		 	$query=$this->db->query($sql,array($username,$password));

		 	$result=$query->row_array();
		    return ($query->num_rows() == 1) ? $result['user_id']: false;

		 }

		 else{
		 	return false;
		 }
	}
}
/* End of file model_user.php */
/* Location: ./application/models/model_user.php */
?>