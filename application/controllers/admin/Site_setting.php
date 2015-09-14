<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0); 
class Site_setting extends CI_Controller {
	public function Update()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Site_setting_model');
		$result['list']=$this->Site_setting_model->site_detail();
		$this->load->view('admin/pages/site_setting',$result);
		$this->load->view('admin/include/footer');
	}
	
		public function edit()
	{
		
		$image=$_FILES['file']['name'];
			  
			$target_path = "assets/images/";  
			$tmp_name = $_FILES["file"]["tmp_name"];
			$name = $_FILES["file"]["name"];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['file']['name']));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
			
			$image_=$_FILES['file1']['name'];
			  
			$target_path = "assets/images/";  
			$tmp_name = $_FILES["file1"]["tmp_name"];
			$name = $_FILES["file1"]["name"];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['file1']['name']));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
			
        $this->load->model('Site_setting_model');
		$data=$this->input->post();
		$result=$this->Site_setting_model->detail_update($data,$image,$image_);
		if($result){
			redirect(base_url().'admin/site_setting/update?m=success');
		}
	}
	
	public function manage_boosting()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Site_setting_model');
		$result['list']=$this->Site_setting_model->view_boosting();
		$this->load->view('admin/pages/manage_boost',$result);
		$this->load->view('admin/include/footer');
	}
	public function insert_plan()
	{
		$this->load->model('Site_setting_model');
		$data=$this->input->post();
		$result=$this->Site_setting_model->plan_insert($data);
		if($result){
			redirect(base_url().'admin/manage_boosting?m=success');
		}
	}
	public function boosting_byid()
	{
		$this->load->model('Site_setting_model');
		$value=$this->input->post('edit_id');
		$id = base64_decode($value);
		$result=$this->Site_setting_model->plan_byid($id);
		$array=json_encode(array('name' => $result[0]->name, 'price' => $result[0]->price, 'days' => $result[0]->days));
		echo $array;
	}
	public function update_plan()
	{
		$this->load->model('Site_setting_model');
		$pid=$this->input->post('plan_id');
		$id = base64_decode($pid);
		$data=$this->input->post();
		$result=$this->Site_setting_model->plan_update($data,$id);
		if($result){
			redirect(base_url().'admin/manage_boosting?m=update');
		}
	}
	public function plan_delete($id)
	{
		$this->load->model('Site_setting_model');
		$result=$this->Site_setting_model->delete_plan($id);
		if($result){
			redirect(base_url().'admin/manage_boosting?m=delete');
		}
		
	}

}
