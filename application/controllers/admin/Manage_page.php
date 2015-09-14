<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_page extends CI_Controller
 {
	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->view_page();
		$this->load->view('admin/pages/manage_page',$result);
		$this->load->view('admin/include/footer');
	}
	public function add_page()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->view('admin/pages/add_page');
		$this->load->view('admin/include/footer');
	}
	public function insert_page()
	{
		$this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->page_insert($data);
		if($result){
			redirect(base_url().'admin/manage_page?m=success');
		}
	}
	public function edit($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->page_byid($id);
		$this->load->view('admin/pages/edit_page',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_page()
	{
		$this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->page_update($data,$id);
		if($result){
			redirect(base_url().'admin/manage_page?m=update');
		}
	}
}
