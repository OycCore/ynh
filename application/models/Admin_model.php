<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
		public function admin_insert($data)
	{
		$pass=sha1($data['password']);
		$insdata=array(
					'name' => $data['name'],
					'email' => $data['email'],
					'password' => $pass,
					'admin_type' => $data['usertype'],
					'status' => $data['radio']
		);
		$query=$this->db->insert('admin',$insdata);
		return $query;
	}
	
			public function admin_detail()
	{
		$this->db->order_by("id", "desc");
		$query=$this->db->get('admin');
		return $query->result();
	}
	
	public function select_property_type()
	{
		$this->db->order_by("id", "desc");
		$query=$this->db->get('property_type');
		return $query->result();
	}
	public function type_insert($data)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		
		$insdata=array(
					'type' => $data['name'],
					'edit_by' => $edit_id,
					'content' => $data['detail']
				);
		$query=$this->db->insert('property_type',$insdata);
		return $query;
	}
	public function property_type_byid($id)
	{
		$query = $this->db->get_where('property_type',array('id' => $id));
		$result=$query->result();
		return $result;
	}
	public function property_type_update($data,$id)
	{
		$updata=array(
					'type' => $data['name'],
					'content' => $data['detail']
				);
		$query=$this->db->update('property_type',$updata,array('id' => $id));
		return $query;
	}
	public function delete_property_type($id)
	{
		$query=$this->db->delete('property_type',array('id' => $id));
		return $query;
	}
	
		public function admin_detailbyid($id)
	{
		$query=$this->db->get_where('admin',array('id' => $id));
		return $query->result();
	} 
	public function admin_detailbyemail($email)
	{
		$query = $this->db->get_where('admin',array('email' => $email));
		return $query->result();
	} 
	public function admin_update($data,$id)
	{
		$updata=array(
					'name' => $data['name'],
					'email' => $data['email'],
					'admin_type' => $data['usertype'],
					'status' => $data['radio']
		);
		$query=$this->db->update('admin',$updata,array('id' => $id));
		return $query;
	}
		public function delete($id)
	{
		$query=$this->db->delete('admin',array('id' => $id));
		return $query;
	}
	public function udata_status($data,$val){
					
					$insdata = array(
					'status' => $val			
				);
		$query=$this->db->where('id', $data['id']);
		$query=$this->db->update('admin', $insdata);
			if($query){
		return TRUE;
		}else{
		echo mysql_error();
		return FALSE;
		}
		}
		
		public function select_country()
	{
		$query=$this->db->get('country');
		return $query->result();
	}
	public function country_byid($id)
	{
		$query=$this->db->get_where('country',array('id'=>$id));
		return $query->result();
	}
	public function state_byid($id)
	{
		$query=$this->db->get_where('state',array('id'=>$id));
		return $query->result();
	}
	public function city_byid($id)
	{
		$query=$this->db->get_where('city',array('id'=>$id));
		return $query->result();
	}
	public function last_property_id()
	{
		$this->db->order_by("id", "desc");
		$this->db->limit(1);
		$this->db->select('id');
		$query=$this->db->get('property_detail');
		return $query->result();
	}
	public function insert_property($data,$image,$fimage,$property_id)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$str1=$data['train_'];
		$value1=implode(',',$str1);
		$str2=$data['buses_'];
		$value2=implode(',',$str2);
		$amenity1=$data['listing_amenity'];
		$am1=implode(',',$amenity1);
		$amenity2=$data['building_amenity'];
		$am2=implode(',',$amenity2);
		$amenity3=$data['include_list'];
		$am3=implode(',',$amenity3);
		$img=implode(',',$image);
		$insdata=array(
					'property_id' => $property_id,
					'property' => $data['name'],
					'purpose' => $data['type'],
					'type' => $data['p_type'],
					'edit_by' => $edit_id,
					'price1' => $data['start'],
					'price2' => $data['last'],
					'square_ft' => $data['square'],
					'bedroom' => $data['bedroom_'],
					'bathroom' => $data['bathroom_'],
					'overview' => $data['overview'],
					'train' => $value1,
					'buses' => $value2,
					'country' => $data['country'],
					'state' => $data['state'],
					'city' => $data['city'],
					'location' => $data['location'],
					'landmark' => $data['landmarks'],
					'school' => $data['school_'],
					'police' => $data['police_'],
					'feature_image' => $fimage,
					'images' => $img,
					'listing_amenities' => $am1,
					'building_amenities' => $am2,
					'listing_include' => $am3,
					'featured' => $data['radio'],
					'boosted' => $data['boosted']
					
		);
		$query=$this->db->insert('property_detail',$insdata);
		
		if(!empty($data['location']))
		{
			$address = urlencode($data['location']); 
			$url = 'http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false';			
			$geocode=file_get_contents($url); 
			$output= json_decode($geocode);
			$lat = $output->results[0]->geometry->location->lat;
			$long = $output->results[0]->geometry->location->lng;
			$formated_address = $output->results[0]->formatted_address;
			$status = $output->status;		
			
			$pid=$this->Admin_model->last_property_id();
			foreach($pid as $id){
				$p_id=$id->id;
			}
			$data=array(
					'pid' => $p_id,
					'lat' => $lat,
					'log' => $long,
					'full_address' => $formated_address
					);
			if($status=='OK'){		
			$result=$this->db->insert('property_location',$data);
			return $result;
			}else{
				redirect(base_url()."admin/property/add?m=error");
			}
		}
		
	}
		public function get_state_list($data)
	{
			$query = $this->db->get_where('state',array('country_id'=>$data));
			$result=$query->result();
			return $result;
	}
	public function get_city_list($data)
	{
			$query = $this->db->get_where('city',array('state_id'=>$data));
			$result=$query->result();
			return $result;
	}
	public function select_property()
	{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('property_detail');
			$result=$query->result();
			return $result;
	}
	public function property_delete($id)
	{
		$query1 = $this->db->get_where('property_detail',array('id'=>$id));
		$result=$query1->result();
		foreach($result as $i){
		$file = "assets/property_images/".$i->feature_image;
		unlink($file);
		$img=explode(",",$i->images);
		foreach($img as $fimg){
		$file1 = "assets/property_images/".$fimg;
		unlink($file1);
		}
		}
		$query=$this->db->delete('property_detail',array('id' => $id));
		return $query;
	}
		public function select_property_byid($id)
	{
			$query = $this->db->get_where('property_detail',array('id'=>$id));
			$result=$query->result();
			return $result;
	}
		public function select_property_by_editid($id)
	{
		$this->db->order_by("id", "desc");
			$query = $this->db->get_where('property_detail',array('edit_by'=>$id));
			$result=$query->result();
			return $result;
	}
	public function property_update($data,$image,$id,$fimage)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$str1=$data['train_'];
		$value1=implode(',',$str1);
		$str2=$data['buses_'];
		$value2=implode(',',$str2);
		$amenity1=$data['listing_amenity'];
		$am1=implode(',',$amenity1);
		$amenity2=$data['building_amenity'];
		$am2=implode(',',$amenity2);
		$amenity3=$data['include_list'];
		$am3=implode(',',$amenity3);
		if(empty($fimage)){
			$image1=$data['fimg'];
		}else{
			$image1=$fimage;
		}
		if($image[0]==null){
			$query = $this->db->get_where('property_detail',array('id'=>$id));
			$result=$query->result();
			foreach($result as $val){
				$image2=$val->images;
			}
		}else{
			$query = $this->db->get_where('property_detail',array('id'=>$id));
			$result=$query->result();
			foreach($result as $val){
				$old=$val->images;
			}
			$img=implode(',',$image);
			$image2=$old. "," . $img; 
		}
		$updata=array(
					'property' => $data['name'],
					'purpose' => $data['type'],
					'type' => $data['p_type'],
					'price1' => $data['start'],
					'price2' => $data['last'],
					'square_ft' => $data['square'],
					'bedroom' => $data['bedroom_'],
					'bathroom' => $data['bathroom_'],
					'overview' => $data['overview'],
					'train' => $value1,
					'buses' => $value2,
					'country' => $data['country'],
					'state' => $data['state'],
					'city' => $data['city'],
					'location' => $data['location'],
					'landmark' => $data['landmarks'],
					'school' => $data['school_'],
					'police' => $data['police_'],
					'feature_image' => $image1,
					'images' => $image2,
					'listing_amenities' => $am1,
					'building_amenities' => $am2,
					'listing_include' => $am3,
					'featured' => $data['radio']
					
		);
		$query=$this->db->update('property_detail',$updata,array('id'=>$id));
		if(!empty($data['location']))
		{
			$address = urlencode($data['location']); 
			$url = 'http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false';			
			$geocode=file_get_contents($url); 
			$output= json_decode($geocode);
			$lat = $output->results[0]->geometry->location->lat;
			$long = $output->results[0]->geometry->location->lng;
			$formated_address = $output->results[0]->formatted_address;
			$status = $output->status;		
			
			$data=array(
					'lat' => $lat,
					'log' => $long,
					'full_address' => $formated_address
					);
			if($status=='OK'){				
			$result=$this->db->update('property_location',$data,array('pid' => $id));
			return $result;
			}else{
				redirect(base_url()."admin/property/add?m=error");
			}
		}else{
			return $query;
		}
	}
	public function update_image($pid,$img)
	{
		$image=implode(',',$img);
		$updata=array(
					'images' => $image);
		$query=$this->db->update('property_detail',$updata,array('id'=>$pid));
		return $query;
	}
	public function select_bus()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('buses');
		$result=$query->result();
		return $result;
	}
	public function select_train()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('train');
		$result=$query->result();
		return $result;
	}
	public function profile_update($data,$id,$image)
	{
		if(empty($image)){
			$image1=$data['img'];
		}else{
			$image1=$image;
		}
		$val1=$data['day1'];
		$val2=$data['day2'];
		$val3=$data['time1'];
		$val4=$data['period1'];
		$val5=$data['time2'];
		$val6=$data['period2'];
		$business=array($val1,$val2,$val3,$val4,$val5,$val6);
		$hour=implode(",",$business);
		$updata=array(
					'name' => $data['name'],
					'email' => $data['email'],
					'phone' => $data['phone'],
					'interest' => $data['agent_interest'],
					'company' => $data['company'],
					'facebook' => $data['facebook'],
					'twitter' => $data['twitter'],
					'google' => $data['google'],
					'restaurant' => $data['restaurant'],
					'activity' => $data['activity'],
					'address' => $data['address'],
					'image' => $image1,
					'b_hour' => $hour,
					'about' => $data['about_u']		
		);
		$query=$this->db->update('admin',$updata,array('id' => $id));
		return $query;
	}
	public function password_update($pass,$id)
	{
		$password=sha1($pass);
		$updata=array(
						'password' => $password
						);
		$query=$this->db->update('admin',$updata,array('id' => $id));
		return $query;
	}
		public function agent_image($id)
	{
		$query = $this->db->get_where('admin',array('id' => $id));
		$result=$query->result();
		return $result;
	}
	public function bus_insert($data)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$insdata=array(
					'buses' => $data['name'],
					'edit_by' => $edit_id,
					'description' => $data['detail']
				);
		$query=$this->db->insert('buses',$insdata);
		return $query;
	}
	public function train_insert($data)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$insdata=array(
					'train' => $data['name'],
					'edit_by' => $edit_id,
					'description' => $data['detail']
				);
		$query=$this->db->insert('train',$insdata);
		return $query;
	}
	public function bus_delete($id)
	{
		$query=$this->db->delete('buses',array('id' => $id));
		return $query;
	}
	public function train_delete($id)
	{
		$query=$this->db->delete('train',array('id' => $id));
		return $query;
	}
		public function total_agent()
	{
		$query=$this->db->get_where('admin',array('admin_type'=> 2));
		return $query->num_rows();
	}
	public function total_user()
	{
		$query=$this->db->get_where('admin',array('admin_type'=> 3));
		return $query->num_rows();
	}
	public function total_property()
	{
		$query=$this->db->get('property_detail');
		return $query->num_rows();
	}
	public function select_listing_amenities()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('listing_amenities');
		$result=$query->result();
		return $result;
	}
	public function listing_amenities_byid($id)
	{
		$query = $this->db->get_where('listing_amenities',array('id' => $id));
		$result=$query->result();
		return $result;
	}
	public function lamenity_insert($data)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$insdata=array(
					'name' => $data['name'],
					'edit_by' => $edit_id,
					'details' => $data['detail']
				);
		$query=$this->db->insert('listing_amenities',$insdata);
		return $query;
	}
	public function lamenity_update($data,$id)
	{
		$updata=array(
					'name' => $data['name'],
					'details' => $data['detail']
				);
		$query=$this->db->update('listing_amenities',$updata,array('id' => $id));
		return $query;
	}
	public function delete_lamenity($id)
	{
		$query=$this->db->delete('listing_amenities',array('id' => $id));
		return $query;
	}
	
	public function select_building_amenities()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('building_amenities');
		$result=$query->result();
		return $result;
	}
	public function bamenity_insert($data)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$insdata=array(
					'name' => $data['name'],
					'edit_by' => $edit_id,
					'details' => $data['detail']
				);
		$query=$this->db->insert('building_amenities',$insdata);
		return $query;
	}
	public function building_amenities_byid($id)
	{
		$query = $this->db->get_where('building_amenities',array('id' => $id));
		$result=$query->result();
		return $result;
	}
	public function bamenity_update($data,$id)
	{
		$updata=array(
					'name' => $data['name'],
					'details' => $data['detail']
				);
		$query=$this->db->update('building_amenities',$updata,array('id' => $id));
		return $query;
	}
	public function delete_bamenity($id)
	{
		$query=$this->db->delete('building_amenities',array('id' => $id));
		return $query;
	}
	public function select_include_listing()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('include_listing');
		$result=$query->result();
		return $result;
	}
	public function listing_insert($data)
	{
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		$insdata=array(
					'name' => $data['name'],
					'edit_by' => $edit_id,
					'details' => $data['detail']
				);
		$query=$this->db->insert('include_listing',$insdata);
		return $query;
	}
	public function include_listing_byid($id)
	{
		$query = $this->db->get_where('include_listing',array('id' => $id));
		$result=$query->result();
		return $result;
	}
	public function listing_update($data,$id)
	{
		$updata=array(
					'name' => $data['name'],
					'details' => $data['detail']
				);
		$query=$this->db->update('include_listing',$updata,array('id' => $id));
		return $query;
	}
	public function listing_delete($id)
	{
		$query=$this->db->delete('include_listing',array('id' => $id));
		return $query;
	}
	public function view_interest()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('interest');
		$result=$query->result();
		return $result;
	}
	public function interest_insert($data)
	{
		$insdata=array(
					'name' => $data['interest']
				);
		$query=$this->db->insert('interest',$insdata);
		return $query;
	}
	public function interest_detailbyid($id)
	{
		$query = $this->db->get_where('interest',array('id' => $id));
		$result=$query->result();
		return $result;
	}
	public function interest_update($data,$id)
	{
		$updata=array(
					'name' => $data['interest']
				);
		$query=$this->db->update('interest',$updata,array('id' => $id));
		return $query;
	}
	public function interest_delete($id)
	{
		$query=$this->db->delete('interest',array('id' => $id));
		return $query;
	}
	
	public function xmlfile_insert($xml){
		$aid=$this->session->userdata('a_id');
		$uid=$this->session->userdata('u_id');
		if(!empty($aid)){
			$edit_id=$this->session->userdata('a_id');
		}elseif(!empty($uid)){
			$edit_id=$this->session->userdata('u_id');
		}
		foreach($xml as $list){
			
			if($list->attributes()=="sale"){
				$p_type=1;
			}
			if($list->attributes()=="rental"){
				$p_type=2;
			}
			foreach($list->propertytype as $type){
				
				$pid=$this->Admin_model->last_property_id();
				foreach($pid as $id){
				$lastEd=$id->id;
				}
				$property_id="#".str_pad(($lastEd+1), 4, '0', STR_PAD_LEFT)."YNH";
				$p_id=$lastEd+1;
						
					$ptype =array();
					foreach($type->children() as $key):
							$ptype[] = $key->getName();
						endforeach; 	 
					foreach($ptype as $key=>$type_){
						$query = $this->db->get_where('property_type',array('type' => $type_));
						$result=$query->result();
						foreach($result as $id1){
							$t = $id1->id;
						}
					}
					 $property_type=$t;
			}
			foreach($list->address as $list1){
				$location=$list1->location;
				$landmarks=$list1->landmarks;
				
				$ct=$list1->city;
						$query = $this->db->get_where('city',array('name' => $ct));
						$result=$query->result();
						foreach($result as $ctid){
							$city=$ctid->id;
						}
						
				$st=$list1->state;
						$query = $this->db->get_where('state',array('name' => $st));
						$result=$query->result();
						foreach($result as $sid){
							$state=$sid->id;
						}
				$cy=$list1->country;
						$query = $this->db->get_where('country',array('name' => $cy));
						$result=$query->result();
						foreach($result as $cid){
							$country=$cid->id;
						}
			}
			foreach($list->details as $list2){
					$prive1=$list2->startingprice;
					$prive2=$list2->lastprice;
					$bedrooms=$list2->bedrooms;
					$bathrooms=$list2->bathrooms;
					$sq=$list2->squareFeet;
					$school=$list2->schooldistricts;
					$police=$list2->policeprecincts;
					
					foreach($list2->buses as $list_2){
					$b = array();
					$bus =array();
					foreach($list_2->children() as $key):
							$bus[] = $key->getName();
						endforeach; 	 
					foreach($bus as $key=>$buses){
						$query = $this->db->get_where('buses',array('buses' => $buses));
						$result=$query->result();
						foreach($result as $id1){
							$b[] = $id1->id;
						}
					}
					$buses=implode(",",$b);
					
				} 
				foreach($list2->train as $list_){
					$t = array();
					$train = array();
					foreach($list_->children() as $key):
							$train[] = $key->getName();
						endforeach; 	 
					foreach($train as $key=>$trains){
						$query = $this->db->get_where('train',array('train' => $trains));
						$result=$query->result();
						foreach($result as $id2){
							$t[] = $id2->id;
						}
					}
					$train=implode(",",$t);
				} 
			}
				
				
				
				foreach($list->amenities as $list3){
					$amenity1 = array();
					$final1 = array();
						foreach($list3->listingamenities->children() as $key):
							$amenity1[] = $key->getName();
						 			endforeach;				
					foreach($amenity1 as $key=>$value1){
						
						$query = $this->db->get_where('listing_amenities',array('name' => $value1));
						$result=$query->result();
						foreach($result as $id1){
							
							$final1[] = $id1->id;
							$val1=implode(",",$final1);
						}
					}
					
					
					
					$amenity2 = array();
					$final2 = array();
						foreach($list3->buildingamenities->children() as $key):
							$amenity2[] = $key->getName();
						 	endforeach;
						foreach($amenity2 as $key=>$value2){
						$query = $this->db->get_where('building_amenities',array('name' => $value2));
						$result=$query->result();
						foreach($result as $id2){
							$final2[] = $id2->id;
							$val2=implode(",",$final2);
						}
					}
					
					
					
					$amenity3 = array();
					$final3 = array();
						foreach($list3->listinginclude->children() as $key):
							$amenity3[] = $key->getName();
						endforeach;
						foreach($amenity3 as $key=>$value3){
						$query = $this->db->get_where('include_listing',array('name' => $value3));
						$result=$query->result();
						foreach($result as $id3){
							$final3[] = $id3->id;
							$val3=implode(",",$final3);
						}
						
						}
						
					
					
				
				}
				foreach($list->featuredimage as $list4){
					
					$words = explode('/', $list4->url);
					$showword = trim($words[count($words) - 1], '/');
					copy($list4->url, 'assets/property_images/'.$showword);
				} 
				foreach($list->images as $list5){
						$bs = array();
						$img = array();
						$cimg = array();
							foreach($list5->url as $a){
								$bs[] = $a;
							} 
							foreach($bs as $image){
								$words = explode('/', $image);
								$img[] = trim($words[count($words) - 1], '/');
								foreach($img as $copy1){
								copy($image, 'assets/property_images/'.$copy1);
								}
							}
							$mimg=implode(",",$img); 
				} 
				if($list->featured->attributes()=="yes"){
					$status="active";
				}
				if($list->featured->attributes()=="no"){
					$status="in active";
				}
		$insdata=array(
					'property_id' => $property_id,
					'property' => $list->propertyname,
					'purpose' => $p_type,
					'type' => $property_type,
					'edit_by' => $edit_id,
					'price1' => $prive1,
					'price2' => $prive2,
					'square_ft' => $sq,
					'bedroom' => $bedrooms,
					'bathroom' => $bathrooms,
					'overview' => $list->overview,
					'train' => $train,
					'buses' => $buses,
					'country' => $country,
					'state' => $state,
					'city' => $city,
					'location' => $location,
					'landmark' => $landmarks,
					'school' => $school,
					'police' => $police,
					'feature_image' => $showword,
					'images' => $mimg,
					'listing_amenities' => $val1,
					'building_amenities' => $val2,
					'listing_include' => $val3,
					'featured' => $status		
		);
		$query=$this->db->insert('property_detail',$insdata);
		
		$address = urlencode($location); 
			$url = 'http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false';			
			$geocode=file_get_contents($url); 
			$output= json_decode($geocode);
			$lat = $output->results[0]->geometry->location->lat;
			$long = $output->results[0]->geometry->location->lng;
			$formated_address = $output->results[0]->formatted_address;
			$status = $output->status;		
		
			$data=array(
					'pid' => $p_id,
					'lat' => $lat,
					'log' => $long,
					'full_address' => $formated_address
					);
			if($status=='OK'){			
			$query=$this->db->insert('property_location',$data);
			}else{
				redirect(base_url()."admin/property/add?m=error");
			}
		
		}
	return $query;
	}
	
	public function payment_detail($transaction_id,$plan_id,$amount,$crr,$ack,$p_id,$fname,$lname,$card_type,$card_no,$expiry_date,$cv_no,$address,$c,$s,$zip_code,$country)
	{
		$uid=$this->session->userdata('u_id');
		$query_ = $this->db->get_where('payment',array('agent_id' => $uid,'property_id' => $p_id));
		$result=$query_->result();
		if(!empty($result)){
		$updata=array(
					'fname' => $fname,
					'lname' => $lname,
					'card_type' => $card_type,
					'card_no' => $card_no,
					'exp_date' => $expiry_date,
					'verification_no' => $cv_no,
					'address' => $address,
					'city' => $c,
					'state' => $s,
					'zip_code' => $zip_code,
					'country' => $country,
					'agent_id' => $uid,
					'transaction_id' => $transaction_id,
					'plan_id' => $plan_id,
					'amount' => $amount,
					'ack' => $ack,
					'c_code' => $crr,
					'property_id' => $p_id
		);
		$array= array('agent_id' => $uid,'property_id' => $p_id);
		$this->db->where($array);
		$query=$this->db->update('payment',$updata);
		}else{
			$insdata=array(
					'fname' => $fname,
					'lname' => $lname,
					'card_type' => $card_type,
					'card_no' => $card_no,
					'exp_date' => $expiry_date,
					'verification_no' => $cv_no,
					'address' => $address,
					'city' => $c,
					'state' => $s,
					'zip_code' => $zip_code,
					'country' => $country,
					'agent_id' => $uid,
					'transaction_id' => $transaction_id,
					'plan_id' => $plan_id,
					'amount' => $amount,
					'ack' => $ack,
					'c_code' => $crr,
					'property_id' => $p_id
		);
		$query=$this->db->insert('payment',$insdata);
		}
		return $query;
	}
	public function update_boosted($id)
	{
		$updata=array(
					'boosted' => 'yes'
				);
		$query=$this->db->update('property_detail',$updata,array('id' => $id));
		return $query;
	}
}
