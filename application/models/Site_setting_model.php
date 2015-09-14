<?php
	class Site_setting_model extends CI_Model{
	
	public function site_detail(){
				
		$query=$this->db->get('site_setting');
		return $query->result();
	}
	public function site_detail_by($name){
		$this->db->select($name);		
		$query=$this->db->get('site_setting');
		return $query->result();
	}
	public function site_detail_bycolumn($name){
		$this->db->select($name);		
		$query=$this->db->get('site_setting');
		return $query->row($name);
	}
	public function site_value_byid($name){
		$this->db->select($name);		
		$query=$this->db->get('site_setting');
		$result=$query->result();
		foreach($result as $list){
			return $list; 
		}
	}
		public function detail_update($data,$image,$image_)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
		if(empty($image_)){
			$image2=$data['img1'];
		}else{
			$image2=$image_;
		}
		$updata=array(
					'site_name' => $data['name'],
					'site_title' => $data['title'],
					'site_logo' => $image1,
					'site_favicon' => $image2,
					'phone' => $data['phone'],
					'email' => $data['email'],
					'facebook' => $data['facebook'],
					'twitter' => $data['twitter'],
					'google' => $data['google'],
					'copyright' => $data['copyright'],
					'address' => $data['address'],
					'paypal_username' => $data['p_username'],
					'paypal_password' => $data['p_pass'],
					'paypal_signature' => $data['p_sign'],
					'paypal_url' => $data['p_url']
		);
		$query=$this->db->update('site_setting',$updata,array('id' => 1));
		return $query;
	}
	
	public function page_title($id){
		$query=$this->db->get_where('manage_page',array('id'=>$id));
		return $query->result();
	}

	public function view_boosting(){
		$this->db->order_by("id", "desc");
		$query=$this->db->get('boost');
		return $query->result();
	}
	public function plan_insert($data)
	{
			$insdata=array(
					'name' => $data['name'],
					'price' => $data['price'],
					'days' => $data['days']
					);
		$query=$this->db->insert('boost',$insdata);
		return $query;
	}
	public function plan_byid($id)
	{
		$query=$this->db->get_where('boost',array('id' => $id));
		return $query->result();
	}
	public function plan_update($data,$id)
	{
			$updata=array(
					'name' => $data['name'],
					'price' => $data['price'],
					'days' => $data['days']
					);
		$query=$this->db->update('boost',$updata,array('id' => $id));
		return $query;
	}
	public function delete_plan($id)
	{
		$updata=array(
					'plan_id' => null,
					'amount' => null
					);
		$this->db->where('plan_id' , $id);
		$this->db->update('payment',$updata);
		$query=$this->db->delete('boost',array('id' => $id));
		return $query;
	}
	
	}