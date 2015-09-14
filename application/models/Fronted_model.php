<?php
	class Fronted_model extends CI_Model{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
		public function insert($data)
	{
		$this->db->select('email');    
		$this->db->from('admin');
		$this->db->where('admin_type',1);
		$query = $this->db->get();
		$a_mail=$query->result();
		$admin_id=$a_mail[0]->email;
		$name=$data['name'];
		$email=$data['email'];
		$password=$data['password'];
		$pass=sha1($password);
		$insdata=array(
					'name' => $name,
					'email' => $email,
					'password' => $pass,
					'admin_type' => $data['usertype'],
					'status' => $data['radio']
		);
		$query=$this->db->insert('admin',$insdata);
		
		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'narendra@oycdev.com';
        $config['smtp_pass']    = 'narendra2736';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE;
		$this->load->library('email', array('mailtype'=>'html'));
							  $this->email->from('narendra@oycdev.com','YNH');
							  $mail=$email;
							  $this->email->to($mail);
							  $this->email->subject(" Registration in YNH ");
							  $image= base_url()."assets/images/logo.png";
							  $message = '<img src="'.$image.'" alt="Test Image" /><br><br><h3>'.$name.'! You Are Successfully Registered...</h3>
										<p>This email confirms that you have been successfully registered.</p>
							  <p>To Log on the site use the following credentials:</p>
								<table border="0" cellpadding="0" cellspacing="0" style="height:45px; width:405px">
									<tbody>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Email Id :</strong></td>
											<td>'.$email.'</td>
										</tr>
										<tr>
											<td><strong>Password :</strong></td>
											<td>'.$password.'</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>

							<p>Thanks &amp; Regards<br />
								Your Neighbouhood</p>
										'; 
							  $this->email->message($message);
							 $sendmail= $this->email->send();					 
				             if($sendmail){
								$this->email->from('narendra@oycdev.com','YNH');
								$mail=$admin_id;
								$this->email->to($mail);
								$this->email->subject(" New Registeration ");
								$image= base_url()."assets/images/logo.png";
								$message = '<img src="'.$image.'" alt="Test Image" /><br><br><h3>'.$name.'! Has been Successfully Registered </h3>
											<p> Email id and Password </p>
								<table border="0" cellpadding="0" cellspacing="0" style="height:45px; width:405px">
									<tbody>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Email Id :</strong></td>
											<td>'.$email.'</td>
										</tr>
										<tr>
											<td><strong>Password :</strong></td>
											<td>'.$password.'</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>

							<p>Thanks &amp; Regards<br />
								Your Neighbouhood</p>
										'; 
								$this->email->message($message);
								$re_mail= $this->email->send();
								return $re_mail;
							 } 
	}
	public function signup($data)
	{
		$this->db->select('email');    
		$this->db->from('admin');
		$this->db->where('admin_type',1);
		$query = $this->db->get();
		$a_mail=$query->result();
		$admin_id=$a_mail[0]->email;
		$name=$data['name'];
		$email=$data['email'];
		$a = array("d","h","f",3,6,"s",0);
		shuffle($a);
		$password=implode("",$a);
		$pass=sha1($password);
		$insdata=array(
					'name' => $name,
					'email' => $email,
					'password' => $pass,
					'admin_type' => $data['usertype'],
					'status' => 1
		);
		$query=$this->db->insert('admin',$insdata);
		
		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'narendra@oycdev.com';
        $config['smtp_pass']    = 'narendra2736';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE;
		$this->load->library('email', array('mailtype'=>'html'));
							  $this->email->from('narendra@oycdev.com','YNH');
							  $mail=$email;
							  $this->email->to($mail);
							  $this->email->subject(" Registration in YNH ");
							  $image= base_url()."assets/images/logo.png";
							  $message = '<img src="'.$image.'" alt="Test Image" /><br><br><h3>'.$name.'! You Are Successfully Registered...</h3>
										<p>This email confirms that you have been successfully registered.</p>
							  <p>To Log on the site use the following credentials:</p>
								<table border="0" cellpadding="0" cellspacing="0" style="height:45px; width:405px">
									<tbody>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Email Id :</strong></td>
											<td>'.$email.'</td>
										</tr>
										<tr>
											<td><strong>Password :</strong></td>
											<td>'.$password.'</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>

							<p>Thanks &amp; Regards<br />
								Your Neighbouhood</p>
										'; 
							  $this->email->message($message);
							 $sendmail= $this->email->send();					 
				             if($sendmail){
								$this->email->from('narendra@oycdev.com','YNH');
								$mail=$admin_id;
								$this->email->to($mail);
								$this->email->subject(" New Registeration ");
								$image= base_url()."assets/images/logo.png";
								$message = '<img src="'.$image.'" alt="Test Image" /><br><br><h3>'.$name.'! Has been Successfully Registered </h3>
											<p> Email id and Password </p>
								<table border="0" cellpadding="0" cellspacing="0" style="height:45px; width:405px">
									<tbody>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Email Id :</strong></td>
											<td>'.$email.'</td>
										</tr>
										<tr>
											<td><strong>Password :</strong></td>
											<td>'.$password.'</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>

							<p>Thanks &amp; Regards<br />
								Your Neighbouhood</p>
										'; 
								$this->email->message($message);
								$re_mail= $this->email->send();
								return $re_mail;
							 } 
	}
	public function fronted_login($data){
		
		$email=$data['email'];
			// Password hashing
			$pass=sha1($data['password']);
			//Checking if details are true?
			$query = $this->db->get_where('admin', array('email' => $email,'password'=>$pass,'status' => 1));
			if($query->num_rows()>0){
				$row = $query->row();
				//Save details in session_cache_expire
				$sess=array(
				'u_id' => $row->id,
				'u_name'=>$row->name,
				'u_email'  => $row->email,
				'u_role'=>$row->admin_type,
				//'a_password'     => $row->password,
				'is_fronted_login' => TRUE
				);
				$this->session->set_userdata($sess);
				return TRUE;
			}
			else{
				return FALSE;
			}
	
	}
	
	public function image_banner(){	
		$query=$this->db->get('banner_image');
		return $query->result();
	}
	public function property_detail(){	
		$query=$this->db->get('property_detail');
		return $query->result();
	}
	public function property_location(){
		$this->db->group_by("location"); 		
		$query = $this->db->get('property_detail');
		return $query->result();
	}
	public function property_type(){	
		$query=$this->db->get('property_type');
		return $query->result();
	}
	public function listing_include(){	
		$query=$this->db->get('include_listing');
		return $query->result();
	}
	public function listing_amenities(){	
		$query=$this->db->get('listing_amenities');
		return $query->result();
	}
	public function building_amenities(){	
		$query=$this->db->get('building_amenities');
		return $query->result();
	}
	
	public function all_property($data){	
	//$location=$data['location'];
	if(!empty($data['location'])){
		$location=$data['location'];
		foreach($location as $loc){
		$this->db->or_where('location',$loc);
		if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
	}
	if($data['beds']!="max"){
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
	}
		}
	}else{
	if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
	}
	if($data['beds']!="max"){
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
	}
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "price" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("price1", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by'] == "newest"){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "featured" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("featured", "asc");
	}
	$this->db->order_by("property_detail.boosted", "asc");
	$this->db->order_by("property_detail.id", "desc");
		$this->db->select('*');    
		$this->db->join('property_detail', 'property_detail.id = property_location.pid');
		$this->db->from('property_location');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	
	public function search_saleproperty($data){	
	//$location=$data['location'];
	if(!empty($data['location'])){
		$location=$data['location'];
		foreach($location as $loc){
		$this->db->or_where('location',$loc);
		$this->db->where('purpose',1);
		if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
		$this->db->where('purpose',1);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
		$this->db->where('purpose',1);
	}
	if($data['beds']!="max"){
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
		$this->db->where('purpose',1);
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
		$this->db->where('purpose',1);
	}
		}
	}else{
	if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
		$this->db->where('purpose',1);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
		$this->db->where('purpose',1);
	}
	if($data['beds']!="max"){
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
		$this->db->where('purpose',1);
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
		$this->db->where('purpose',1);
	}
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "price" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("price1", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by'] == "newest"){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "featured" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("featured", "asc");
	}
	
	$this->db->order_by("property_detail.boosted", "asc");
	$this->db->order_by("property_detail.id", "desc");
		$this->db->select('*');    
		$this->db->join('property_detail', 'property_detail.id = property_location.pid');
		$this->db->from('property_location');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function search_rentalproperty($data){	
	//$location=$data['location'];
	if(!empty($data['location'])){
		$location=$data['location'];
		foreach($location as $loc){
		$this->db->or_where('location',$loc);
		$this->db->where('purpose',2);
		if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
		$this->db->where('purpose',2);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
		$this->db->where('purpose',2);
	}
	if($data['beds']!="max"){
		
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
		$this->db->where('purpose',2);
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
		$this->db->where('purpose',2);
	}
		}
	}else{
	if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
		$this->db->where('purpose',2);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
		$this->db->where('purpose',2);
	}
	if($data['beds']!="max"){
		
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
		$this->db->where('purpose',2);
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
		$this->db->where('purpose',2);
	}
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "price" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("price1", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by'] == "newest"){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "featured" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("featured", "asc");
	}
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
		$this->db->select('*');    
		$this->db->join('property_detail', 'property_detail.id = property_location.pid');
		$this->db->from('property_location');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	public function advanced_search_property($data){
	if($data['sq_ft']!="max"){
		$this->db->where('square_ft >=',$data['sq_ft']);
	}
	if($data['include']!="all"){
		$this->db->where('listing_include',$data['include']);
	}
	if(!empty($data['sale'])){
		$this->db->where('purpose',$data['sale']);
	}
	if(!empty($data['ptype'])){
		$val3=$data['ptype'];
		foreach($val3 as $val4){
		$this->db->or_where('type',$val4);
		}
	}
	if(!empty($data['listing'])){
		$val1=implode(",",$data['listing']);
		$this->db->where('listing_amenities',$val1);
	}
	if(!empty($data['building'])){
		$val2=implode(",",$data['building']);
		$this->db->where('building_amenities',$val2);
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "price" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("price1", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by'] == "newest"){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "featured" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("featured", "asc");
	}
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
		$this->db->select('*');    
		$this->db->join('property_detail', 'property_detail.id = property_location.pid');
		$this->db->from('property_location');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function filter_property($data){	
	//$location=$data['location'];
	if(!empty($data['location'])){
		$location=$data['location'];
		foreach($location as $loc){
		$this->db->or_where('location',$loc);
		if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
	}
	if($data['beds']!="max"){
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
	}
	if($data['sq_ft']!="max"){
		$this->db->where('square_ft >=',$data['sq_ft']);
	}
		}
	}else{
	if($data['type']!=="all"){
		$this->db->where('type',$data['type']);
	}
	if($data['price1']!=="max" && $data['price2']!=="max"){
		$price1=$data['price1'];
		$price2=$data['price2'];
		$array=array('price1 >=' => $price1 , 'price2 <=' => $price2);
		$this->db->where($array);
	}
	if($data['beds']!="max"){
		if($data['beds']==4){
			$this->db->where('bedroom >=',$data['beds']);
		}else{
		$this->db->where('bedroom',$data['beds']);
		}
	}
	if($data['baths']!="max"){
		if($data['baths']==4){
			$this->db->where('bathroom >=',$data['baths']);
		}else{
		$this->db->where('bathroom',$data['baths']);
		}
	}
	if($data['sq_ft']!="max"){
		$this->db->where('square_ft >=',$data['sq_ft']);
	}
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "price" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("price1", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by'] == "newest"){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "featured" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("featured", "asc");
	}
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
		$this->db->select('*');    
		$this->db->join('property_detail', 'property_detail.id = property_location.pid');
		$this->db->from('property_location');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	public function property_detail_byid($id){	
		$query=$this->db->get_where('property_detail',array('id' => $id));
		return $query->result();
	}
	public function fav_property($purpose){	
		
			$this->db->select('property_id');
			$this->db->group_by('property_id');
			$this->db->select_avg('star');
			$avg = $this->db->get('star_rating');
			$res1=$avg->result();
			foreach($res1 as $res2){
			if($res2->star >= 4){
				$pid[]=$res2->property_id;
			}
			}
			
		if($purpose==0){
			$this->db->where_in('id', $pid);
			$this->db->order_by("boosted", "asc");
			$this->db->order_by("id", "desc");
			$this->db->limit(11);
			$query1=$this->db->get('property_detail');
			}else{
			$this->db->where_in('id', $pid);
			$this->db->order_by("boosted", "asc");
			$this->db->order_by("id", "desc"); 
			$this->db->limit(11);
			$query1=$this->db->get_where('property_detail',array('purpose' => $purpose));
			}
			return $query1->result();
	}
	
	public function new_listing_property($purpose){
		$this->db->order_by("boosted", "asc");
		$this->db->order_by("id", "desc");		
		$this->db->limit(11);
		if($purpose==0){
			$query=$this->db->get('property_detail');
		}else{
		$query=$this->db->get_where('property_detail',array('purpose' => $purpose));
		}
		return $query->result();
	}
	
	public function featured_property($purpose){
		$this->db->order_by("boosted", "asc");
		$this->db->order_by("id", "desc");
		$this->db->limit(17);
		if($purpose==0){
			$query=$this->db->get_where('property_detail',array('featured' => "active"));
		}else{
		$query=$this->db->get_where('property_detail',array('purpose' => $purpose,'featured' => "active"));
		}
		return $query->result();
	}

	public function property_save($data){
		$id=$this->session->userdata('u_id');
		$query=$this->db->get_where('save_property',array('property_id' => $data,'user_id' => $id,'fav_property' => 0));
		$num1=$query->num_rows();
		if($num1==1){
			$updata=array(
					'property_id' => $data,
					'user_id' => $id,
					'fav_property' => 1
		);
		$query=$this->db->update('save_property',$updata,array('property_id' => $data,'user_id' => $id));
		return $query;
		}
		$query=$this->db->get_where('save_property',array('property_id' => $data,'user_id' => $id,'fav_property' => 1));
		$num2=$query->num_rows();
		if($num2==1){
			$updata=array(
					'property_id' => $data,
					'user_id' => $id,
					'fav_property' => 0
		);
		$query=$this->db->update('save_property',$updata,array('property_id' => $data,'user_id' => $id));
		return $query;
		}
		$insdata=array(
					'property_id' => $data,
					'user_id' => $id,
					'fav_property' => 1
		);
		$query=$this->db->insert('save_property',$insdata);
		return $query;
	}
	public function	my_home(){
		$id=$this->session->userdata('u_id');		
		$query=$this->db->get_where('save_property',array('user_id' => $id,'fav_property' => 1));
		return $query->result();
	}
	public function saved_property_byid($ptid,$u_id){	
		$query=$this->db->get_where('save_property',array('property_id' => $ptid,'user_id' => $u_id,'fav_property' => 1));
		return $query->num_rows();
	}
	
	public function search_save($data,$name){
		$id=$this->session->userdata('u_id');
		$insdata=array(
					'user_id' => $id,
					'name' => $name,
					'search_url' => $data
		);
		$query=$this->db->insert('save_search',$insdata);
		return $query;
	}
	public function	my_search(){
		$id=$this->session->userdata('u_id');		
		$query=$this->db->get_where('save_search',array('user_id' => $id));
		return $query->result();
	}
	
	public function star_insert($value,$pid){
		$id=$this->session->userdata('u_id');
		$query=$this->db->get_where('star_rating',array('property_id' => $pid,'user_id' => $id));
		$num=$query->num_rows();
		if($num!=0){
			$updata=array(
					'star' => $value
		);
		$query=$this->db->update('star_rating',$updata,array('property_id' => $pid,'user_id' => $id));
		return $query;
		}else{
	$insdata=array(
					'property_id' => $pid,
					'user_id' => $id,
					'star' => $value
		);
		$query=$this->db->insert('star_rating',$insdata);
		return $query;
		}
	}
	public function review_insert($value,$pid){
		$id=$this->session->userdata('u_id');
	$insdata=array(
					'property_id' => $pid,
					'user_id' => $id,
					'review' => $value
		);
		$query=$this->db->insert('review',$insdata);
		return $query;
	}
	public function	review_byid($id){	
		$query=$this->db->get_where('review',array('property_id' => $id));
		return $query->result();
	}
	public function photo_add($data,$pid,$images,$image){
		$i=array($images,$image);
		$photo=implode(",",$i);
	$updata=array(
					'images' => $photo
		);
		$query=$this->db->update('property_detail',$updata,array('id'=>$pid));
		return $query;
	}
	public function bookmark_save($data,$pid){
		$id=$this->session->userdata('u_id');
		$insdata=array(
					'property_id' => $pid,
					'user_id' => $id,
					'b_url' => $data
		);
		$query=$this->db->insert('bookmark',$insdata);
		return $query;
	}
	
	public function admin_detail_byid($id){		
		$query=$this->db->get_where('admin',array('id' => $id));
		return $query->result();
	}
	public function get_save_property($id){
		$this->db->select('property_id');
		$query=$this->db->get_where('save_property',array('user_id' => $id));
		return $query->result();
	}
	public function map_location($id){
		$query=$this->db->get_where('property_location',array('pid' => $id));
		return $query->result();
	}
	public function share_detail($data,$pid){
		$email= $data['email'];
		$friend_email= $data['femail'];
		$msg= $data['message'];
		$id=$this->session->userdata('u_id');
					$insdata=array(
						'property_id' => $pid,
						'user_id' => $id,
						'user_email' => $email,
						'friend_email' => $friend_email,
						'b_url' => $data['url'],
						'message' => $data['message']	
		);
		$query=$this->db->insert('share_data',$insdata);
		
		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'narendra@oycdev.com';
        $config['smtp_pass']    = 'narendra2736';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE;
		 $this->load->library('email', array('mailtype'=>'html'));
							  $this->email->from($email,'YNH');
							  $mail=$friend_email;
							  $this->email->to($mail);
							  $this->email->subject(" Share Property ");
							  $image= base_url()."assets/images/logo.png";
							  $message = '<img src="'.$image.'" alt="Test Image" /><br><br><h3>'
							  .$email .' shared this listing with you.</h3>
										<table border="0" cellpadding="0" cellspacing="0" style="height:45px; width:405px">
									<tbody>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Message</strong></td>
											<td>'.$msg.'</td>
										</tr>
										<tr>
											<td><strong>URL :</strong></td>
											<td>'.$data['url'].'</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
										<p>Thanks &amp; Regards<br />
								Your Neighbouhood</p>'; 
							  $this->email->message($message);
							 $email= $this->email->send();					 
				             return $email; 
							 
	}
	public function property_byids($id){
		$this->db->where_in('id',explode(",",$id));
		$query=$this->db->get('property_detail');
		return $query->result();
	}
	public function bookmark_propertyid(){
		$id=$this->session->userdata('u_id');	
		$query=$this->db->get_where('bookmark',array('user_id' => $id));
		return $query->result();
	}
	public function bookmark_url($id){		
		$query=$this->db->get_where('bookmark',array('property_id' => $id));
		return $query->result();
	}
	public function agent_contact($data){
		
		$insdata=array(
						'to_email' => $data['agent_id'],
						'from_email' => $data['email'],
						'subject' => $data['subject'],
						'message' => $data['message']
		);
		
		$query=$this->db->insert('contact',$insdata);
		
		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'narendra@oycdev.com';
        $config['smtp_pass']    = 'narendra2736';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE;
		 $this->load->library('email', array('mailtype'=>'html'));
							  $this->email->from($data['email']);
							  $mail=$data['agent_id'];
							  $this->email->to($mail);
							  $this->email->subject(" Contact By Client ");
							  $image= base_url()."assets/images/logo.png";
							  $message = 
										'<img src="'.$image.'" alt="Test Image" /><br><br><h3>'
							  .$data['email'] .' Contacted with you and send a message.</h3>
										<table border="0" cellpadding="2" cellspacing="2" style="height:45px; width:405px">
									<tbody>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Subject </strong></td>
											<td>'.$data['subject'].'</td>
										</tr>
										<tr>
											<td><strong>Message </strong></td>
											<td>'.$data['message'].'</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
										<p>Thanks &amp; Regards<br />
								Your Neighbouhood</p>';
							  $this->email->message($message);
							 $email= $this->email->send();					 
				             return $email; 
	}
	public function getdetail_property($data){
		if(!empty($data['sort_by']) && $data['sort_by']== "price" ){
			$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("price1", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by'] == "newest"){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
	}
	if(!empty($data['sort_by']) && $data['sort_by']== "featured" ){
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("featured", "asc");
	}
		$this->db->order_by("property_detail.boosted", "asc");
		$this->db->order_by("property_detail.id", "desc");
		$this->db->select('*');    
		$this->db->join('property_detail', 'property_detail.id = property_location.pid');
		$this->db->from('property_location');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function help_feedback($user,$agent){
		$query=$this->db->get_where('user_review',array('agent_id' => $agent,'user_id' => $user));
		$result=$query->result();
		foreach($result as $response){
			$vote=$response->helpful;
		}
		$upt=$vote+1;
		$updata=array(
					'helpful' => $upt
		);
		$query=$this->db->update('user_review',$updata,array('agent_id' => $agent,'user_id' => $user));
		return $query;
	}
	
	public function starreview_byuser($value,$aid){
		$id=$this->session->userdata('u_id');
		$query=$this->db->get_where('user_review',array('agent_id' => $aid,'user_id' => $id));
		$num=$query->num_rows();
		if($num!=0){
			$updata=array(
					'star' => $value
		);
		$query=$this->db->update('user_review',$updata,array('agent_id' => $aid,'user_id' => $id));
		return $query;
		}else{
	$insdata=array(
					'agent_id' => $aid,
					'user_id' => $id,
					'star' => $value
		);
		$query=$this->db->insert('user_review',$insdata);
		return $query;
		}
	}
	public function userreview_insert($value,$aid){
	$id=$this->session->userdata('u_id');
	$query=$this->db->get_where('user_review',array('agent_id' => $aid,'user_id' => $id));
		$num=$query->num_rows();
		if($num!=0){
			$updata=array(
					'review' => $value
		);
		$query=$this->db->update('user_review',$updata,array('agent_id' => $aid,'user_id' => $id));
		return $query;
		}else{
	$insdata=array(
					'agent_id' => $aid,
					'user_id' => $id,
					'review' => $value
		);
		$query=$this->db->insert('user_review',$insdata);
		return $query;
	}
	}
	
	public function admin_review($id){
		$query=$this->db->get_where('user_review',array('agent_id' => $id));
		return $query->result();
	}
	public function agent_avgrating($id){
	$this->db->where('agent_id' , $id);	
			$this->db->select_avg('star');
			$avg = $this->db->get('user_review');
			$result1=$avg->result();
			return $result1;
	}
	public function most_rating(){
		$this->db->group_by("agent_id"); 
		$this->db->order_by("agent_id","desc");
		$this->db->select('agent_id');
			$this->db->select_avg('star');
			$avg = $this->db->get('user_review');
			$result1=$avg->result();
			return $result1;
	}
	public function select_property_by_adminid($id)
	{
			$this->db->order_by("id","desc");
			$this->db->limit(4);
			$query = $this->db->get_where('property_detail',array('edit_by'=>$id));
			$result=$query->result();
			return $result;
	}
	public function insert_view($id,$u_id){
		$this->db->select('view');
		$this->db->select('user_id');
		$query=$this->db->get_where('profile_view',array('agent_id' => $id));
		$result=$query->result();
		if(!empty($result)){
		$update=$result[0]->view;
		$user_id=$result[0]->user_id;
		$arr=explode(",",$user_id);
		$val=$update+1;
		}
		if(!empty($result) && !in_array($u_id,$arr)){
		$updata=array(
					'user_id' => $user_id.','.$u_id,
					'view' => $val
		);
		$query=$this->db->update('profile_view',$updata,array('agent_id' => $id));
		return $query;
		}if(empty($result)){
		$insdata=array(
					'agent_id' => $id,
					'user_id' => $u_id,
					'view' => 1
		);
		$query=$this->db->insert('profile_view',$insdata);
		return $query;
		}
	}
	public function agent_profile_view($id){
		$this->db->select('view');
		$query=$this->db->get_where('profile_view',array('agent_id' => $id));
		$result=$query->result();
		return $result;
	}
	public function match_bookmark($pid){
		$id=$this->session->userdata('u_id');
		$query=$this->db->get_where('bookmark',array('user_id' => $id , 'property_id' => $pid));
		$result=$query->result();
		return $result;
	}
	
	
	
	}
	?>