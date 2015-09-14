<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0); 
class Agent extends CI_Controller {
			
			public function profile()
	{
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$id=$this->session->userdata('u_id');
		}
		$result['list']=$this->Admin_model->admin_detailbyid($id);
		$this->load->view('admin/pages/profile',$result);
		$this->load->view('admin/include/footer');
	}
			
			public function add()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->view('admin/pages/add_admin');
		$this->load->view('admin/include/footer');
	}
	public function view()
	{
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$result['list']=$this->Admin_model->admin_detail();
		$this->load->view('admin/pages/view_admin',$result);
		$this->load->view('admin/include/footer');

		
	}
	
	public function insert()
	{
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->admin_insert($data);
		if($result){
			redirect(base_url().'admin/view?m=success');
		}
	}

	public function edit_agent($id)
	{
		$id = base64_decode($id);
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$result['list']=$this->Admin_model->admin_detailbyid($id);
		$this->load->view('admin/pages/edit_admin',$result);
				$this->load->view('admin/include/footer');

		
	}
	
	public function update()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Admin_model->admin_update($data,$id);
		if($result){
			redirect(base_url().'admin/view?m=update');
		}
		$this->load->view('admin/include/footer');
	}

			public function delete_agent($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->delete($id);
		if($result){
			redirect(base_url().'admin/view?m=delete');
		}
		$this->load->view('admin/include/footer');
		
	}
	
	public function update_status(){
					$data=$this->input->post('id');
					$u_value=$this->input->post('active');
					$chk=$this->input->post('action');
					if($chk=='update'){
						if($u_value==1){
							$val=0;
						}elseif($u_value==0){
							$val=1;
						}
					$data=$this->input->post();
					$this->load->model('Admin_model');
					$result['items']=$this->Admin_model->udata_status($data,$val);
					
					if($result)	
					{	
					redirect(base_url()."admin/view?m=status");
					}
					}
	}
	public function edit_profile($id)
	{
		$id = base64_decode($id);
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$result['interest']=$this->Admin_model->view_interest();
		$result['list']=$this->Admin_model->admin_detailbyid($id);
		$this->load->view('admin/pages/edit_profile',$result);
				$this->load->view('admin/include/footer');	
	}
	
	public function change_password($id)
	{
		$id = base64_decode($id);
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$result['aid']=$id;
		$this->load->view('admin/pages/change_password',$result);
		$this->load->view('admin/include/footer');	
	}
	public function update_password()
	{
		$this->load->model('Admin_model');
		$pass=$this->input->post('npass');
		$id=$this->input->post('id');
		$result=$this->Admin_model->password_update($pass,$id);
		if($result){
			redirect(base_url().'admin/agent/profile?m=update');
		}
	}
	
	public function update_profile()
	{
		
		$image=$_FILES['file']['name'];
			  
			$target_path = "assets/agent_images/";  
			$tmp_name = $_FILES["file"]["tmp_name"];
			$name = $_FILES["file"]["name"];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['file']['name']));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
			
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Admin_model->profile_update($data,$id,$image);
		if($result){
			redirect(base_url().'admin/agent/profile?m=update');
		}
	}
	
	public function manage_interest()
	{
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$result['list']=$this->Admin_model->view_interest();
		$this->load->view('admin/pages/manage_interest',$result);
		$this->load->view('admin/include/footer');
	}
	public function insert_interest()
	{
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->interest_insert($data);
		if($result){
			redirect(base_url().'admin/agent/manage_interest?m=success');
		}
	}
		public function interest_byid()
	{
		$this->load->model('Admin_model');
		$value=$this->input->post('edit_id');
		$id = base64_decode($value);
		$result=$this->Admin_model->interest_detailbyid($id);
		foreach($result as $detail){
                            echo $detail->name;
		} 
	}
	public function update_interest()
	{
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$i=$this->input->post('interest_id');
		$id = base64_decode($i);
		$result=$this->Admin_model->interest_update($data,$id);
		if($result){
			redirect(base_url().'admin/agent/manage_interest?m=update');
		}
	}
	public function delete_interest($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->interest_delete($id);
		if($result){
			redirect(base_url().'admin/agent/manage_interest?m=delete');
		}
		
	}
	
}
