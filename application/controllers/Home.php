<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$purpose=0;
		$result['new']=$this->Fronted_model->new_listing_property($purpose);
		$result['featured']=$this->Fronted_model->featured_property($purpose);
		$result['favorite']=$this->Fronted_model->fav_property($purpose);
		$result['list1']=$this->Fronted_model->image_banner();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['loc']=$this->Fronted_model->property_location();
		$result['list2']=$this->Fronted_model->property_detail();
		$result['list3']=$this->Fronted_model->property_type();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('index',$result);
		$this->load->view('include/footer');
	}
	
	public function sales()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$purpose=1;
		$result['new']=$this->Fronted_model->new_listing_property($purpose);
		$result['featured']=$this->Fronted_model->featured_property($purpose);
		$result['favorite']=$this->Fronted_model->fav_property($purpose);
		$result['list1']=$this->Fronted_model->image_banner();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['loc']=$this->Fronted_model->property_location();
		$result['list2']=$this->Fronted_model->property_detail();
		$result['list3']=$this->Fronted_model->property_type();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('index',$result);
		$this->load->view('include/footer');
	}
	
	public function rentals()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$purpose=2;
		$result['new']=$this->Fronted_model->new_listing_property($purpose);
		$result['featured']=$this->Fronted_model->featured_property($purpose);
		$result['favorite']=$this->Fronted_model->fav_property($purpose);
		//$rental=$this->input->post('rental');
		$result['list1']=$this->Fronted_model->image_banner();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['loc']=$this->Fronted_model->property_location();
		$result['list2']=$this->Fronted_model->property_detail();
		$result['list3']=$this->Fronted_model->property_type();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('index',$result);
		$this->load->view('include/footer');
	}
	
	public function all_search()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$data=$this->input->get();
		$result['detail']=$this->Fronted_model->all_property($data);
		$result['loc']=$this->Fronted_model->property_location();
		$result['list3']=$this->Fronted_model->property_type();
		$result['myhome']=$this->Fronted_model->my_home();
		$result['mysearch']=$this->Fronted_model->my_search();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('listing',$result);
		$this->load->view('include/footer');
	}
	
	public function sale_search()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$data=$this->input->get();
		$result['detail']=$this->Fronted_model->search_saleproperty($data);
		$result['loc']=$this->Fronted_model->property_location();
		$result['list3']=$this->Fronted_model->property_type();
		$result['myhome']=$this->Fronted_model->my_home();
		$result['mysearch']=$this->Fronted_model->my_search();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('listing',$result);
		$this->load->view('include/footer');
	}
	
	public function rental_search()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$data=$this->input->get();
		$result['detail']=$this->Fronted_model->search_rentalproperty($data);
		$result['loc']=$this->Fronted_model->property_location();
		$result['list3']=$this->Fronted_model->property_type();
		$result['myhome']=$this->Fronted_model->my_home();
		$result['mysearch']=$this->Fronted_model->my_search();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('listing',$result);
		$this->load->view('include/footer');
	}
	
	public function filter()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$data=$this->input->get();
		$result['detail']=$this->Fronted_model->filter_property($data);
		$result['loc']=$this->Fronted_model->property_location();
		$result['list3']=$this->Fronted_model->property_type();
		$result['myhome']=$this->Fronted_model->my_home();
		$result['mysearch']=$this->Fronted_model->my_search();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('listing',$result);
		$this->load->view('include/footer');
	}
	public function advanced_search()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$data=$this->input->get();
		$result['detail']=$this->Fronted_model->advanced_search_property($data);
		$result['loc']=$this->Fronted_model->property_location();
		$result['list3']=$this->Fronted_model->property_type();
		$result['myhome']=$this->Fronted_model->my_home();
		$result['mysearch']=$this->Fronted_model->my_search();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('listing',$result);
		$this->load->view('include/footer');
	}
	public function detail($id)
	{
		$id = base64_decode($id);
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$result['detail']=$this->Fronted_model->property_detail_byid($id);
		$result['map']=$this->Fronted_model->map_location($id);
		$result['review']=$this->Fronted_model->review_byid($id);
		$detail=$this->Fronted_model->property_detail_byid($id);
		$edit_id=$detail[0]->edit_by;
		$result['consider']=$this->Fronted_model->select_property_by_adminid($edit_id);
		$this->load->view('detail',$result);
		$this->load->view('include/footer');
	}
	
	public function review(){
		$this->load->model('Fronted_model');
		$data=$this->input->post('title');
		$id=$this->input->post('id');
		$result=$this->Fronted_model->review_insert($data,$id);
		if($result){
			$_SESSION['MESSAGE'] = "review_done";
			redirect(base_url()."home/detail/".base64_encode($id));
		}
	}
	
	public function add_photo(){
		
		$image=$_FILES['file']['name'];
			  
			$target_path = "assets/property_images/";  
			$tmp_name = $_FILES["file"]["tmp_name"];
			$name = $_FILES["file"]["name"];
			$validextensions = array("jpeg", "jpg", "png");     
			$ext = explode('.', basename($_FILES['file']['name']));   
			$file_extension = end($ext); 
			  
			if (in_array($file_extension, $validextensions)) {
			move_uploaded_file($tmp_name, "$target_path/$name");
			}
		
		$this->load->model('Fronted_model');
		$data=$this->input->post();
		$id=$this->input->post('pid');
		$images=$this->input->post('images');
		$result=$this->Fronted_model->photo_add($data,$id,$images,$image);
		if($result){
			redirect(base_url()."home/detail/".base64_encode($id));
		}
	}
	
	public function profile_professional($id){
		$id = base64_decode($id);
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$u_id=$this->session->userdata('u_id');
		if($u_id!=$id){
			$insert=$this->Fronted_model->insert_view($id,$u_id);
		}
		$result['view']=$this->Fronted_model->agent_profile_view($id);
		$result['average']=$this->Fronted_model->agent_avgrating($id);
		$result['r_data']=$this->Fronted_model->admin_review($id);
		$result['detail']=$this->Fronted_model->admin_detail_byid($id);
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['m_rating']=$this->Fronted_model->most_rating();
		$result['property']=$this->Fronted_model->select_property_by_adminid($id);
		$this->load->view('profile_professional',$result);
		$this->load->view('include/footer');
	}
	
	public function profile_personal($id){
		$id = base64_decode($id);
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$result['myhome']=$this->Fronted_model->my_home();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['detail']=$this->Fronted_model->admin_detail_byid($id);
		$this->load->view('profile_personal',$result);
		$this->load->view('include/footer');
	}
	
	public function share_listing(){
		
		$this->load->model('Fronted_model');
		$data=$this->input->post();
		$id=$this->input->post('pid');
		$result=$this->Fronted_model->share_detail($data,$id);
		if($result){ 
		$_SESSION['MESSAGE'] = "sharing_success";
			redirect(base_url()."home/detail/".base64_encode($id));
		}
	}
	
	public function excel_detail(){
		$this->load->model('Fronted_model');
		$ids=$this->input->post('dlt');
		$result['detail']=$this->Fronted_model->property_byids($ids);
		$this->load->view('excel_sheet',$result);
	}
	
	public function contact_agent(){
		$this->load->model('Fronted_model');
		$data=$this->input->post();
		$url=$this->input->post('url');
		$result=$this->Fronted_model->agent_contact($data);
		if($result){ 
		$_SESSION['MESSAGE'] = "contact_success";
			redirect($url);
			}
	}
	
	public function property_listing()
	{
		$this->load->view('include/header');
		$this->load->model('Fronted_model');
		$this->load->model('Home_highlight_model');
		$data=$this->input->get();
		$result['detail']=$this->Fronted_model->getdetail_property($data);
		$result['loc']=$this->Fronted_model->property_location();
		$result['list3']=$this->Fronted_model->property_type();
		$result['myhome']=$this->Fronted_model->my_home();
		$result['mysearch']=$this->Fronted_model->my_search();
		$result['explore']=$this->Home_highlight_model->view_explore();
		$result['l_include']=$this->Fronted_model->listing_include();
		$result['l_amenity']=$this->Fronted_model->listing_amenities();
		$result['b_amenity']=$this->Fronted_model->building_amenities();
		$this->load->view('listing',$result);
		$this->load->view('include/footer');
	}
	
	public function user_review(){
		$this->load->model('Fronted_model');
		$data=$this->input->post('title');
		$id=$this->input->post('id');
		$result=$this->Fronted_model->userreview_insert($data,$id);
		if($result){
			$_SESSION['MESSAGE'] = "review_success";
			redirect(base_url()."home/profile_professional/".base64_encode($id));
		}
	}
	
}
