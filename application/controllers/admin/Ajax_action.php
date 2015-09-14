<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0); 
class Ajax_action extends CI_Controller {
	public function state_list(){
		
		$this->load->model('Admin_model');
		$data=$this->input->post('cnt');
		$result=$this->Admin_model->get_state_list($data);
		?>
		<option value="">--- State ---</option>
	<?php foreach($result as $list){?>
	<option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
		 <?php
			}


	}
	
	public function city_list(){
		
		$this->load->model('Admin_model');
		$data=$this->input->post('st');
		$result=$this->Admin_model->get_city_list($data); ?>
		<option value="">--- City ---</option>
    <?php	 foreach($result as $list){?>
	<option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
		 <?php
			}


	}
	
	public function delete_image()
	{
		$this->load->model('Admin_model');
		$pid=$this->input->post('id');
		$gallery=$this->input->post('gallery');
		$result=$this->Admin_model->select_property_byid($pid);
		foreach($result as $image){
			$val=$image->images;
			$img=explode(",",$val);
			foreach($img as $value){
				if ($value == $gallery) {
           $key=array_search($gallery,$img);
		   unset($img[$key]);
        }
			}
		}
		$result=$this->Admin_model->update_image($pid,$img);
		if ($result){
        unlink("assets/property_images/" . $gallery);
		}
		else{
        echo 'no';
		}
	}
	
	public function save_property(){
		$this->load->model('Fronted_model');
		$data=$this->input->post('cnt');
		$result=$this->Fronted_model->property_save($data);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	public function save_search(){
		$this->load->model('Fronted_model');
		$data=$this->input->post('s_url');
		$name=$this->input->post('s_name');
		$value=$this->Fronted_model->my_search();
		foreach($value as $name1){
			$n=$name1->search_url;
		}
		if($data==$n){
			echo "match";
		}else{
		$result=$this->Fronted_model->search_save($data,$name);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
		}
	}
	public function insert_star(){
		
		$this->load->model('Fronted_model');
		$value=$this->input->post('s_val');
		$id=$this->input->post('pty_id');
		$result=$this->Fronted_model->star_insert($value,$id);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	public function save_bookmark(){
		$this->load->model('Fronted_model');
		$data=$this->input->post('b_url');
		$id=$this->input->post('p_id');
		$value=$this->Fronted_model->match_bookmark($id);
		if(!empty($value)){
			echo "match";
		}else{
		$result=$this->Fronted_model->bookmark_save($data,$id);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
		}
	}
	
	public function agent_email(){
		$id=$this->input->post('ag_id');
		$this->load->model('Admin_model'); 
		$result=$this->Admin_model->admin_detailbyid($id);
		 foreach($result as $list){
			echo $list->email;
		}
		
	}
	
	public function user_starreview(){
		$this->load->model('Fronted_model');
		$value=$this->input->post('star_val');
		$id=$this->input->post('ag_id');
		$result=$this->Fronted_model->starreview_byuser($value,$id);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	public function give_feedback(){
		$this->load->model('Fronted_model');
		$user=$this->input->post('user');
		$agent=$this->input->post('agent');
		$result=$this->Fronted_model->help_feedback($user,$agent);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	public function match_email(){
		$email=$this->input->post('id');
		$this->load->model('Admin_model'); 
		$result=$this->Admin_model->admin_detailbyemail($email);
		if(!empty($result)){
			echo 1;
		}
	}
	
}
?>
