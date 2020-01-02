<?php 	

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
	}

	public function isLoggedIn(){

		if($this->session->userdata('loggend_in') === true){
          redirect('dasboard','refresh');
		}

	}

	public function isNotLoggedIn(){

		if($this->session->userdata('loggend_in') !=true){
			redirect('login','refresh');
		}

	}


}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */









 ?>