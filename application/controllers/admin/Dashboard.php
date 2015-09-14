<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$a_id = $this->session->userdata('a_id');
			$a_permission = $this->session->userdata('is_login');
			
			if($a_permission != 1 AND $a_id != 1){
			redirect(base_url().'admin/Login?msg=notlogin');
			exit();
			}
		
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list1']=$this->Admin_model->total_agent();
		$result['list2']=$this->Admin_model->total_user();
		$result['list3']=$this->Admin_model->total_property();
		$this->load->view('admin/dashboard',$result);
		$this->load->view('admin/include/footer');
	}
	
	public function agent()
	{
		$u_id = $this->session->userdata('u_id');
			$u_permission = $this->session->userdata('is_fronted_login');
			
			if($u_permission != 1 AND $u_id != 1){
			redirect(base_url());
			exit();
			}
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list1']=$this->Admin_model->total_agent();
		$result['list2']=$this->Admin_model->total_user();
		$result['list3']=$this->Admin_model->total_property();
		$this->load->view('admin/dashboard',$result);
		$this->load->view('admin/include/footer');
	}
	
	
	public function user()
	{
		$u_id = $this->session->userdata('u_id');
			$u_permission = $this->session->userdata('is_fronted_login');
			
			if($u_permission != 1 AND $u_id != 1){
			redirect(base_url());
			exit();
			}
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list1']=$this->Admin_model->total_agent();
		$result['list2']=$this->Admin_model->total_user();
		$result['list3']=$this->Admin_model->total_property();
		$this->load->view('admin/dashboard',$result);
		$this->load->view('admin/include/footer');
	}
	
}
