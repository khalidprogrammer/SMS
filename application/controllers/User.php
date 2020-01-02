<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
//Do your magic here
    $this->load->library('session');
    $this->load->model('Model_user');
    $this->load->library('form_validation');
  }
  public function login()
  {
    $validator=array('success'=>false, 'message'=>array());
    $validate_data=array(
      array(
        'field'=>'username',
        'label'=>'Username',
        'rules'=>'required|callback_validate_username',
      ),
      array(
        'field'=>'password',
        'label'=>'Password',
        'rules'=>'required'
      )
    );
    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
    if ($this->form_validation->run() == TRUE) {

       $username=$this->input->post('username');
       $password=$this->input->post('password');
       $Login=$this->Model_user->login($username,$password);

       if($Login){
           
           $user_data=array(
                 
                 'id'=>$Login,
                 'loggend_in'=>true

           );
           $this->session->set_userdata($user_data);

         $validator['success']=true;
         $validator['message']='dashboard';
       }
       else{
        $validator['success']=false;
        $validator['message']='The username and password are incorrect';

       }

    } else {
      $validator['success']=false;
      foreach ($_POST as $key => $value) {
        $validator['message'][$key]=form_error($key);
      }
    }
     echo json_encode($validator);
  }
  public function validate_username(){

    $username=$this->input->post('username');
    $validate=$this->Model_user->validate_username($username);
    if($validate==true){
      return true;
    }
    else{
      $this->form_validation->set_message('validate_username','The {field} does not exisit');
      return false;
    }
  }


  public function logout(){

    $this->session->sess_destroy();
    redirect('login','refresh');
  }
}
?>