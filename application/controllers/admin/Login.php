<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('admin/login');
		}
		public function validate(){
			$data = $this->input->post();
			$this->load->model('login_model');
			$result=$this->login_model->admin_login($data);
			if($result){
			redirect(base_url().'admin');
			}else{
				redirect(base_url()."admin/Login/?msg=unsuccessful");
				exit();
			}
		}
		
		public function logout(){
			$aid=$this->session->userdata('a_id');
			$uid=$this->session->userdata('u_id');
			if(!empty($aid)){
			$logout=array('a_id','a_name','email','a_role','is_login');
			$this->session->unset_userdata($logout);
			redirect(base_url().'admin/Login');
			exit();
			}elseif(!empty($uid)){
			$logout=array('u_id','u_name','u_email','u_role','is_fronted_login');
			$this->session->unset_userdata($logout);
			redirect(base_url());
			exit();
			}
		}
		
		public function mail_send()
	{
		$this->load->model('login_model');
		$email=$this->input->post('email');
		$detail=$this->login_model->check_email($email);
		if(!empty($detail)){
				$result=$this->login_model->insert_query($email); 
				$_SESSION['MESSAGE'] = "update_password";
				redirect(base_url());
			}
			else{ 
				$_SESSION['MESSAGE'] = "notupdate_password";
				redirect(base_url());
			}
	}
}


