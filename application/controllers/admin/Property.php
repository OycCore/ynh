<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

	public function add()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$this->load->model('Site_setting_model');
		$result['list1']=$this->Admin_model->select_train();
		$result['list2']=$this->Admin_model->select_bus();
		$result['list3']=$this->Admin_model->select_country();
		$result['type']=$this->Admin_model->select_property_type();
		$result['amenities1']=$this->Admin_model->select_listing_amenities();
		$result['amenities2']=$this->Admin_model->select_building_amenities();
		$result['amenities3']=$this->Admin_model->select_include_listing();
		$this->load->view('admin/pages/add_property',$result);
		$this->load->view('admin/include/footer');
	}
	
	public function view()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id'); 
		if(!empty($aid)){
		$result['list']=$this->Admin_model->select_property();
		}elseif(!empty($uid))
		{
			$result['list']=$this->Admin_model->select_property_by_editid($uid);
		}
		$this->load->view('admin/pages/view_property',$result);
		$this->load->view('admin/include/footer');
	}

	public function insert()
	{
		$t=time();
		$mimage= $_FILES['file']['name'];
		foreach($mimage as $images)
		{
			$img = $t."-".$images;
			$image[]= $img; 
		}

			$target_path = "assets/property_images/";  
			  
			for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
			$tmp_name = $_FILES["file"]["tmp_name"][$i];
			$name =$t."-".$_FILES["file"]["name"][$i];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['file']['name'][$i]));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
			}
		$fimage= $t.'-'.$_FILES['image']['name'];
			  
			$target_path = "assets/property_images/";  
			$tmp_name = $_FILES["image"]["tmp_name"];
			$name = $t.'-'.$_FILES["image"]["name"];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['image']['name']));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
		$pid=$this->Admin_model->last_property_id();
		foreach($pid as $id){
				$lastEd=$id->id;
		}
		if(!empty($lastEd)){
		$property_id="#".str_pad(($lastEd+1), 4, '0', STR_PAD_LEFT)."YNH";
		}else{
			$property_id="#".str_pad((1), 4, '0', STR_PAD_LEFT)."YNH";
		}
		$this->load->model('Admin_model');
		$data=$this->input->post();
		$result['list']=$this->Admin_model->insert_property($data,$image,$fimage,$property_id);
		if($result){
			redirect(base_url().'admin/property/view?m=success');
		}
	}
	
			public function delete_property($id)
	{
		$this->load->model('Admin_model');
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$result=$this->Admin_model->property_delete($id);
		if($result){
			redirect(base_url().'admin/property/view?m=delete');
		}
		$this->load->view('admin/include/footer');
		
	}
	
	public function edit_property($id)
	{
		$id = base64_decode($id); 
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list1']=$this->Admin_model->select_train();
		$result['list2']=$this->Admin_model->select_bus();
		$result['list3']=$this->Admin_model->select_country();
		$result['type']=$this->Admin_model->select_property_type();
		$result['amenities1']=$this->Admin_model->select_listing_amenities();
		$result['amenities2']=$this->Admin_model->select_building_amenities();
		$result['amenities3']=$this->Admin_model->select_include_listing();
		$result['detail']=$this->Admin_model->select_property_byid($id);
		$this->load->view('admin/pages/edit_property',$result);
		$this->load->view('admin/include/footer');
	}
	
	public function update_property()
	{
		$image=$_FILES['file']['name'];
			  
			$target_path = "assets/property_images/";  
			  
			for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
			$tmp_name = $_FILES["file"]["tmp_name"][$i];
			$name = $_FILES["file"]["name"][$i];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['file']['name'][$i]));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
			}
			
		$fimage=$_FILES['image']['name'];
			  
			$target_path = "assets/property_images/";  
			$tmp_name = $_FILES["image"]["tmp_name"];
			$name = $_FILES["image"]["name"];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['image']['name']));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}

		

		$this->load->model('Admin_model');
		$data=$this->input->post();
		$id=$this->input->post('id');
		$result['list']=$this->Admin_model->property_update($data,$image,$id,$fimage);
		if($result){
			redirect(base_url().'admin/property/view?m=update');
		}
	}
	public function type()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->select_property_type();
		$this->load->view('admin/pages/view_property_type',$result);
		$this->load->view('admin/include/footer');
	}
	public function insert_type()
	{
		
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->type_insert($data);
		if($result){
			redirect(base_url().'admin/property/type?m=success');
		}
	}
	public function edit_property_type($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->property_type_byid($id);
		$this->load->view('admin/pages/edit_property_type',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_property_type()
	{
        $this->load->model('Admin_model');
		$id=$this->input->post('id');
		$data=$this->input->post();
		$result=$this->Admin_model->property_type_update($data,$id);
		if($result){
			redirect(base_url().'admin/property/type?m=update');
		}
		
	}
		public function property_type_delete($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->delete_property_type($id);
		if($result){
			redirect(base_url().'admin/property/type?m=delete');
		}
		
	}
	
	public function bus()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->select_bus();
		$this->load->view('admin/pages/view_buses',$result);
		$this->load->view('admin/include/footer');
	}
	
	public function train()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->select_train();
		$this->load->view('admin/pages/view_trains',$result);
		$this->load->view('admin/include/footer');
	}
		public function insert_bus()
	{
		
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->bus_insert($data);
		if($result){
			redirect(base_url().'admin/property/bus?m=success');
		}
	}
	public function insert_train()
	{
		
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->train_insert($data);
		if($result){
			redirect(base_url().'admin/property/train?m=success');
		}
		
	}
		public function delete_train($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->train_delete($id);
		if($result){
			redirect(base_url().'admin/property/train?m=delete');
		}
		
	}
	public function delete_bus($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->bus_delete($id);
		if($result){
			redirect(base_url().'admin/property/bus?m=delete');
		}
		
	}
	public function listing_amenities()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->select_listing_amenities();
		$this->load->view('admin/pages/listing_amenities',$result);
		$this->load->view('admin/include/footer');
	}
	
	public function insert_lamenity()
	{
		
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->lamenity_insert($data);
		if($result){
			redirect(base_url().'admin/property/listing_amenities?m=success');
		}
		
	}
	public function edit_listing_amenity($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->listing_amenities_byid($id);
		$this->load->view('admin/pages/edit_listing_amenities',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_lamenity()
	{
        $this->load->model('Admin_model');
		$id=$this->input->post('id');
		$data=$this->input->post();
		$result=$this->Admin_model->lamenity_update($data,$id);
		if($result){
			redirect(base_url().'admin/property/listing_amenities?m=update');
		}	
	}
	public function lamenity_delete($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->delete_lamenity($id);
		if($result){
			redirect(base_url().'admin/property/listing_amenities?m=delete');
		}
		
	}
	
	public function building_amenities()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->select_building_amenities();
		$this->load->view('admin/pages/building_amenities',$result);
		$this->load->view('admin/include/footer');
	}
	public function insert_bamenity()
	{
		
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->bamenity_insert($data);
		if($result){
			redirect(base_url().'admin/property/building_amenities?m=success');
		}
	}
	public function edit_building_amenity($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->building_amenities_byid($id);
		$this->load->view('admin/pages/edit_building_amenities',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_bamenity()
	{
        $this->load->model('Admin_model');
		$id=$this->input->post('id');
		$data=$this->input->post();
		$result=$this->Admin_model->bamenity_update($data,$id);
		if($result){
			redirect(base_url().'admin/property/building_amenities?m=update');
		}
		
	}
		public function bamenity_delete($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->delete_bamenity($id);
		if($result){
			redirect(base_url().'admin/property/building_amenities?m=delete');
		}
		
	}

	public function include_listing()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->select_include_listing();
		$this->load->view('admin/pages/include_listing',$result);
		$this->load->view('admin/include/footer');
	}
	public function insert_listing()
	{
		
        $this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->listing_insert($data);
		if($result){
			redirect(base_url().'admin/property/include_listing?m=success');
		}
	}
	public function edit_include_listing($id)
	{
		$id = base64_decode($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$result['list']=$this->Admin_model->include_listing_byid($id);
		$this->load->view('admin/pages/edit_include_listing',$result);
		$this->load->view('admin/include/footer');
	}
	public function update_listing()
	{
        $this->load->model('Admin_model');
		$id=$this->input->post('id');
		$data=$this->input->post();
		$result=$this->Admin_model->listing_update($data,$id);
		if($result){
			redirect(base_url().'admin/property/include_listing?m=update');
		}
		
	}
	public function  delete_listing($id)
	{
		$this->load->model('Admin_model');
		$result=$this->Admin_model->listing_delete($id);
		if($result){
			redirect(base_url().'admin/property/include_listing?m=delete');
		}
		
	}
	public function xml_format()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->view('admin/pages/xml_format');
		$this->load->view('admin/include/footer');
	}
	public function xml_download()
	{
	$data = file_get_contents("assets/sample.xml"); // Read the file's contents
	$name = 'xml_sample.xml';
	force_download($name, $data);
	}
	public function upload_xml()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$xml['detail'] = simplexml_load_file("assets/sample.xml", "SimpleXMLElement", LIBXML_NOCDATA); 
		$this->load->view('admin/pages/upload_xml');
		$this->load->view('admin/include/footer');
	}
	public function xml_insert()
	{
		$file=$_FILES['xml_file']['name'];
			  
			$target_path = "assets/xml/";  
			$tmp_name = $_FILES["xml_file"]["tmp_name"];
			$name = $_FILES["xml_file"]["name"];
			$validextensions = array("xml");     
			$ext = explode('.', basename($_FILES['xml_file']['name']));   
			$file_extension = end($ext); 
			
			//if (in_array($file_extension, $validextensions)) {
			//move_uploaded_file($tmp_name, "$target_path/$name");
			//}
			$xml= simplexml_load_file($tmp_name, "SimpleXMLElement", LIBXML_NOCDATA);
			
		
		$this->load->model('Admin_model');
		$data=$this->input->post();
		$result=$this->Admin_model->xmlfile_insert($xml);
		if($result){
			redirect(base_url().'admin/property/upload_xml?m=success');
		}
	}
	public function property_boosting()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Admin_model');
		$this->load->model('Site_setting_model');
		$id=$this->session->userdata('u_id');
		$result['detail']=$this->Admin_model->select_property_by_editid($id);
		$result['plan']=$this->Site_setting_model->view_boosting();
		$this->load->view('admin/pages/boost_property',$result);
		$this->load->view('admin/include/footer');
	}
	public function checkout_form()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->model('Site_setting_model');
		$id=$this->input->post('plan_id');
		$result['p_id']=$this->input->post('select_property');
		$result['plan']=$this->Site_setting_model->plan_byid($id);
		$this->load->view('admin/pages/checkout',$result);
		$this->load->view('admin/include/footer');
	}
	public function payment()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/leftbar');
		$this->load->view('admin/pages/payment');
		$this->load->view('admin/include/footer');
	}
}
