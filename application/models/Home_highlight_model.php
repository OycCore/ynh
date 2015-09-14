<?php
	class Home_highlight_model extends CI_Model
	{
	public function image_insert($data,$image)
	{
			$insdata=array(
					'heading' => $data['i_heading'],
					'image' => $image,
					'content' => $data['detail']
		);
		$query=$this->db->insert('banner_image',$insdata);
		return $query;
	}
	public function banner(){
				
		$query=$this->db->get('banner_image');
		return $query->result();
	}
	public function banner_image_byid($id){
				
		$query=$this->db->get_where('banner_image',array('id' => $id));
		return $query->result();
	}
	public function image_update($data,$image,$id)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
		$updata=array(
					'heading' => $data['i_heading'],
					'image' => $image1,
					'content' => $data['detail']
		);
		$query=$this->db->update('banner_image',$updata,array('id' => $id));
		return $query;
	}
	public function image_delete($id)
	{
		$query1 = $this->db->get_where('banner_image',array('id'=>$id));
		$result=$query1->result();
		foreach($result as $i){
		$file = "assets/images/".$i->image;
		unlink($file);
		}
		$query=$this->db->delete('banner_image',array('id' => $id));
		return $query;
	}
	public function select_video()
	{
		$query=$this->db->get('banner_video');
		return $query->result();
	}
	public function video_insert($data)
	{
			$insdata=array(
					'heading' => $data['v_heading'],
					'url' => $data['url'],
					'content' => $data['detail']
		);
		$query=$this->db->insert('banner_video',$insdata);
		return $query;
	}
	public function banner_video_byid($id){
				
		$query=$this->db->get_where('banner_video',array('id' => $id));
		return $query->result();
	}
	public function video_update($data,$id)
	{
			$updata=array(
					'heading' => $data['v_heading'],
					'url' => $data['url'],
					'content' => $data['detail']
		);
		$query=$this->db->update('banner_video',$updata,array('id' => $id));
		return $query;
	}
		public function video_delete($id)
	{
		$query=$this->db->delete('banner_video',array('id' => $id));
		return $query;
	}
	
	public function explore_insert($data,$image)
	{
			$insdata=array(
					'heading' => $data['s_heading'],
					'image' => $image,
					'content' => $data['detail']
		);
		$query=$this->db->insert('explore',$insdata);
		return $query;
	}
	public function view_explore()
	{
		$query=$this->db->get('explore');
		return $query->result();
	}
	public function explore_byid($id){
				
		$query=$this->db->get_where('explore',array('id' => $id));
		return $query->result();
	}
		public function explore_update($data,$image,$id)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
		$updata=array(
					'heading' => $data['s_heading'],
					'image' => $image1,
					'content' => $data['detail']
		);
		$query=$this->db->update('explore',$updata,array('id' => $id));
		return $query;
	}
		public function explore_delete($id)
	{
		$query1 = $this->db->get_where('explore',array('id'=>$id));
		$result=$query1->result();
		foreach($result as $i){
		$file = "assets/images/".$i->image;
		unlink($file);
		}
		$query=$this->db->delete('explore',array('id' => $id));
		return $query;
	}
	
	public function service_insert($data,$image)
	{
			$insdata=array(
					'heading' => $data['s_heading'],
					'image' => $image,
					'content' => $data['detail']
		);
		$query=$this->db->insert('our_services',$insdata);
		return $query;
	}
	public function view_service()
	{
		$query=$this->db->get('our_services');
		return $query->result();
	}
	public function service_byid($id){
				
		$query=$this->db->get_where('our_services',array('id' => $id));
		return $query->result();
	}
		public function service_update($data,$image,$id)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
		$updata=array(
					'heading' => $data['s_heading'],
					'image' => $image1,
					'content' => $data['detail']
		);
		$query=$this->db->update('our_services',$updata,array('id' => $id));
		return $query;
	}
		public function service_delete($id)
	{
		$query1 = $this->db->get_where('our_services',array('id'=>$id));
		$result=$query1->result();
		foreach($result as $i){
		$file = "assets/images/".$i->image;
		unlink($file);
		}
		$query=$this->db->delete('our_services',array('id' => $id));
		return $query;
	}
	
	public function view_ynhfeature()
	{
		$query=$this->db->get('ynh_feature');
		return $query->result();
	}
	public function ynhfeature_insert($data,$image)
	{
			$insdata=array(
					'name' => $data['name'],
					'image' => $image,
					'content' => $data['detail']
		);
		$query=$this->db->insert('ynh_feature',$insdata);
		return $query;
	}
	public function ynhfeature_byid($id){
				
		$query=$this->db->get_where('ynh_feature',array('id' => $id));
		return $query->result();
	}
	public function ynhfeature_update($data,$image,$id)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
			$updata=array(
					'name' => $data['name'],
					'image' => $image1,
					'content' => $data['detail']
		);
		$query=$this->db->update('ynh_feature',$updata,array('id' => $id));
		return $query;
	}
	public function ynhfeature_delete($id)
	{
		$query1 = $this->db->get_where('ynh_feature',array('id'=>$id));
		$result=$query1->result();
		foreach($result as $i){
		$file = "assets/images/".$i->image;
		unlink($file);
		}
		$query=$this->db->delete('ynh_feature',array('id' => $id));
		return $query;
	}
	
	public function feature_insert($data,$image)
	{
			$insdata=array(
					'name' => $data['name'],
					'image' => $image
					);
		$query=$this->db->insert('manage_client',$insdata);
		return $query;
	}
	public function view_feature()
	{
		$query=$this->db->get('manage_client');
		return $query->result();
	}
	public function feature_byid($id)
	{
		$query=$this->db->get_where('manage_client',array('id' => $id));
		return $query->result();
	}
	public function feature_update($data,$image,$id)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
		$updata=array(
					'name' => $data['name'],
					'image' => $image1
		);
		$query=$this->db->update('manage_client',$updata,array('id' => $id));
		return $query;
	}
		public function client_delete($id)
	{
		$query1 = $this->db->get_where('manage_client',array('id'=>$id));
		$result=$query1->result();
		foreach($result as $i){
		$file = "assets/images/".$i->image;
		unlink($file);
		}
		$query=$this->db->delete('manage_client',array('id' => $id));
		return $query;
	}
	
	public function view_page()
	{
		$query=$this->db->get('manage_page');
		return $query->result();
	}
	public function page_insert($data)
	{
			$insdata=array(
					'page_name' => $data['name'],
					'page_title' => $data['title'],
					'meta_title' => $data['m_title'],
					'meta_keywords' => $data['m_keyword'],
					'meta_description' => $data['m_description'],
					'description' => $data['content']
					);
		$query=$this->db->insert('manage_page',$insdata);
		return $query;
	}
	public function page_byid($id)
	{
		$query=$this->db->get_where('manage_page',array('id' => $id));
		return $query->result();
	}
	public function page_update($data,$id)
	{
			$updata=array(
					'page_name' => $data['name'],
					'page_title' => $data['title'],
					'meta_title' => $data['m_title'],
					'meta_keywords' => $data['m_keyword'],
					'meta_description' => $data['m_description'],
					'description' => $data['content']
					);
		$query=$this->db->update('manage_page',$updata,array('id' => $id));
		return $query;
	}
}