<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_highlight extends CI_Controller {
	public function image_banner()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->banner();
		$this->load->view('admin/pages/home_image',$result);
		$this->load->view('admin/include/footer');
	}
	
					public function insert_image()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->image_insert($data,$image);
		if($result){
			redirect(base_url().'admin/home_highlight/image_banner?m=success');
		}
	}
	
	public function edit_image($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->banner_image_byid($id);
		$this->load->view('admin/pages/edit_bannerimage',$result);
		$this->load->view('admin/include/footer');
	}
	
	public function update_image()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->image_update($data,$image,$id);
		if($result){
			redirect(base_url().'admin/home_highlight/image_banner?m=update');
		}
	}
	
		public function delete_image($id)
	{
		$this->load->model('Home_highlight_model');
		$result=$this->Home_highlight_model->image_delete($id);
		if($result){
			redirect(base_url().'admin/home_highlight/image_banner?m=delete');
		}	
	}
	
	public function video_banner()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->select_video();
		$this->load->view('admin/pages/home_video',$result);
		$this->load->view('admin/include/footer');
	}
	public function insert_video()
	{
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->video_insert($data);
		if($result){
			redirect(base_url().'admin/home_highlight/video_banner?m=success');
		}
	}
	public function edit_video($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->banner_video_byid($id);
		$this->load->view('admin/pages/edit_bannervideo',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_video()
	{
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->video_update($data,$id);
		if($result){
			redirect(base_url().'admin/home_highlight/video_banner?m=update');
		}
	}
	public function delete_video($id)
	{
		$this->load->model('Home_highlight_model');
		$result=$this->Home_highlight_model->video_delete($id);
		if($result){
			redirect(base_url().'admin/home_highlight/video_banner?m=delete');
		}	
	}
	
	public function explore()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->view_explore();
		$this->load->view('admin/pages/explore',$result);
		$this->load->view('admin/include/footer');
	}
		public function insert_explore()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->explore_insert($data,$image);
		if($result){
			redirect(base_url().'admin/home_highlight/explore?m=success');
		}
	}
	public function edit_explore($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->explore_byid($id);
		$this->load->view('admin/pages/edit_explore',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_explore()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->explore_update($data,$image,$id);
		if($result){
			redirect(base_url().'admin/home_highlight/explore?m=update');
		}
	}
			public function delete_explore($id)
	{
		$this->load->model('Home_highlight_model');
		$result=$this->Home_highlight_model->explore_delete($id);
		if($result){
			redirect(base_url().'admin/home_highlight/explore?m=delete');
		}
	}
	
		public function services()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->view_service();
		$this->load->view('admin/pages/services',$result);
		$this->load->view('admin/include/footer');
	}
		public function insert_service()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->service_insert($data,$image);
		if($result){
			redirect(base_url().'admin/home_highlight/services?m=success');
		}
	}
	public function edit_service($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->service_byid($id);
		$this->load->view('admin/pages/edit_services',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_service()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->service_update($data,$image,$id);
		if($result){
			redirect(base_url().'admin/home_highlight/services?m=update');
		}
	}
			public function delete_service($id)
	{
		$this->load->model('Home_highlight_model');
		$result=$this->Home_highlight_model->service_delete($id);
		if($result){
			redirect(base_url().'admin/home_highlight/services?m=delete');
		}
	}

		public function ynh_feature()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->view_ynhfeature();
		$this->load->view('admin/pages/ynh_feature',$result);
		$this->load->view('admin/include/footer');
	}
			public function add_ynhfeature()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->view('admin/pages/add_ynhfeature');
		$this->load->view('admin/include/footer');
	}
		public function insert_ynhfeature()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->ynhfeature_insert($data,$image);
		if($result){
			redirect(base_url().'admin/home_highlight/ynh_feature?m=success');
		}
	}
	public function edit_ynhfeature($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->ynhfeature_byid($id);
		$this->load->view('admin/pages/edit_ynhfeature',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_ynhfeature()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->ynhfeature_update($data,$image,$id);
		if($result){
			redirect(base_url().'admin/home_highlight/ynh_feature?m=update');
		}
	}
		public function delete_ynhfeature($id)
	{
		$this->load->model('Home_highlight_model');
		$result=$this->Home_highlight_model->ynhfeature_delete($id);
		if($result){
			redirect(base_url().'admin/home_highlight/ynh_feature?m=delete');
		}
	}
	
	public function manage_client()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->view_feature();
		$this->load->view('admin/pages/featured_in',$result);
		$this->load->view('admin/include/footer');
	}

	public function insert_feature()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$result=$this->Home_highlight_model->feature_insert($data,$image);
		if($result){
			redirect(base_url().'admin/home_highlight/manage_client?m=success');
		}
	}
	public function edit_client($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Home_highlight_model');
		$result['list']=$this->Home_highlight_model->feature_byid($id);
		$this->load->view('admin/pages/edit_feature',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_feature()
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
			
        $this->load->model('Home_highlight_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result=$this->Home_highlight_model->feature_update($data,$image,$id);
		if($result){
			redirect(base_url().'admin/home_highlight/manage_client?m=update');
		}
	}
				public function delete_client($id)
	{
		$this->load->model('Home_highlight_model');
		$result=$this->Home_highlight_model->client_delete($id);
		if($result){
			redirect(base_url().'admin/home_highlight/manage_client?m=delete');
		}
	}

}
