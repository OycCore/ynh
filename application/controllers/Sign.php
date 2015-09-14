<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {
	
		public function sign_up()
	{
        $this->load->model('Fronted_model');
		$data=$this->input->post();
		$email=$this->input->post('email');   
		$query = $this->db->get_where('admin',array('email' => $email));
		$a_mail=$query->result();
		if(!empty($a_mail)){
			$_SESSION['MESSAGE'] = "signup_not";
			redirect(base_url());
		}else{
		$result=$this->Fronted_model->insert($data);
		if($result){
			$_SESSION['MESSAGE'] = "signup_success";
			redirect(base_url());
		}
		}
	}
	
	public function sign_in()
	{
        $this->load->model('Fronted_model');
		$data=$this->input->post();
		$cname=$this->input->post('name');
		$cemail=$this->input->post('email');
		$ctype=$this->input->post('usertype');
		$query = $this->db->get_where('admin',array('email' => $cemail));
		$a_mail=$query->result();
		if(!empty($a_mail)){
			$_SESSION['MESSAGE'] = "signup_not";
			redirect(base_url());
		}else{
			if(empty($cname) || empty($cemail) || empty($ctype)):
				$_SESSION['MESSAGE'] = "signup_unsuccess";
				redirect(base_url());
			endif;
		$result=$this->Fronted_model->signup($data);
		if($result){
			$_SESSION['MESSAGE'] = "sign_success";
			redirect(base_url());
		}
		}
	}
	
	public function login(){
			$data = $this->input->post();
			$this->load->model('Fronted_model');
			$result=$this->Fronted_model->fronted_login($data);
			if($result){
					$_SESSION['MESSAGE'] = "login_success";
					redirect(base_url());
			}else{ 
					$_SESSION['MESSAGE'] = "login_unsuccess";
					redirect(base_url());
			}
			}

			public function logout(){
				$logout=array('u_id','u_name','u_email','u_role','is_fronted_login');
			$this->session->unset_userdata($logout);
			$_SESSION['MESSAGE'] = "logout_success";
			redirect(base_url());
			exit();
		}
	
}
