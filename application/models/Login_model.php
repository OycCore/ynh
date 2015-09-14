<?php
	class Login_model extends CI_Model{
	
	public function admin_login($data){
		
		$email=$data['name'];
			// Password hashing
			$pass=sha1($data['pass']);
			//Checking if details are true?
			$query = $this->db->get_where('admin', array('email' => $email,'password'=>$pass,'admin_type' => 1));
			if($query->num_rows()>0){
				$row = $query->row();
				//Save details in session_cache_expire
				$sess=array(
				'a_id' => $row->id,
				'a_name'=>$row->name,
				'email'  => $row->email,
				'a_role'=>$row->admin_type,
				//'a_password'     => $row->password,
				'is_login' => TRUE
				);
				$this->session->set_userdata($sess);
				return TRUE;
			}
			else{
				return FALSE;
			}
	
	}
	
	public function admin_detail()
	{
		$query=$this->db->get('admin');
		return $query->result();
	}
	
	public function check_email($email)
	{
		$query=$this->db->get_where('admin',array('email' => $email));
		return $query->num_rows();
		
	}
	
	public function insert_query($email)
	{
		$a = array("d","h","f",3,6);
		shuffle($a);
		$send_pass=implode("",$a);
		$update_pass=sha1($send_pass);
		$insdata = array(
                              'password' =>  $update_pass
                             );
                             $update=$this->db->update('admin', $insdata,array('email' => $email));
							
			if($update){
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
							  $this->email->from("narendra@oycdev.com", "YNH Admin Team");
							  $mail=$email;
							  $this->email->to($mail);
							   $image= base_url()."assets/images/logo.png";
							  $this->email->subject(" Forget Password Mail ");
							  $message = '<img src="'.$image.'" alt="Test Image" /><br><br><h3>Your Password Has Been Changed !</h3>
							  <p>This email confirms that your password has been changed.</p>
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
											<td>'.$send_pass.'</td>
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
								Your Neighbouhood</p>';
							  $this->email->message($message);
							 $email= $this->email->send();					 
				             return $email;
							 }
							 
	}
	}