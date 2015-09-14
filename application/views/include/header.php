<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php $detail=$this->Site_setting_model->site_detail(); foreach($detail as $logo){ ?>
<link rel="icon" href="<?php echo base_url()."assets/images/".$logo->site_favicon; ?>" type="image/x-icon">
<?php } 
$request_url=$_SERVER['REQUEST_URI'];
$request_url_parameter = explode('/',$request_url);
if($request_url_parameter[1]== "ynh" && $request_url_parameter[2]== "" || $request_url_parameter[1]== "ynh" && $request_url_parameter[2]== "sales" || $request_url_parameter[1]== "ynh" && $request_url_parameter[2]== "rentals"){
	$id=1;
}elseif($request_url_parameter[3]== "profile_professional"){
	$id=3;
}elseif($request_url_parameter[3]== "detail"){
	$id=4;
}elseif($request_url_parameter[3]== "profile_personal"){
	$id=5;
}else{
	$id=2;
}
$title=$this->Site_setting_model->page_title($id); foreach($title as $page) { 
	$page_title=$page->page_title;
} ?>

<title><?php echo $page_title; ?></title>

<link href="<?php echo base_url() ?>assets/fronted/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/fronted/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/fronted/css/style-responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/fronted/css/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url() ?>assets/fronted/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/fronted/js/owl.carousel.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/fronted/js/jquery.placeholder.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/fronted/js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<!--------------------- Confirm Message ----------- -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fronted/boot_alert/bootstrap.min.css">
<script src="<?php echo base_url() ?>assets/fronted/boot_alert/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/fronted/boot_alert/bootbox.min.js"></script>

</head>
<body>
<header>
<?php error_reporting(0); ?>
<div class="wrapper">
<h1 class="logo"><?php $detail=$this->Site_setting_model->site_detail(); foreach($detail as $logo){?>
    <a href="<?php echo base_url()?>">
        <img src="<?php echo base_url()."assets/images/".$logo->site_logo; ?>" alt="Logo">
    </a>
	<?php } ?></h1>
<nav>
<ul class="inner">
<li><a href="#">SALES/RENTALS</a></li>
<li class="active"><a href="#">NEIGHBORHOOD API</a></li>
<li><a href="#">OUR SERVICES</a></li>
<li><a href="#">BLOG </a></li>
</ul>
</nav>
<div class="buttons">
<?php $id=$this->session->userdata('u_id'); $sid=$this->session->userdata('is_fronted_login'); $this->load->model('Admin_model');
 $result=$this->Admin_model->admin_detailbyid($id); foreach($result as $userid){
$uid=$userid->status; if($sid!=$uid){ redirect(base_url()."Sign/logout"); } } if(empty($id)){?>
<a class="search" href="#"><img src="<?php echo base_url() ?>assets/fronted/images/search_icon.png" alt="" /></a>
<a class="login" href="#">LOGIN</a>
<div class="login-box">
<div class="login-detail">
<h3>Login</h3>
        <form id="login_form" method="post" action="<?php echo base_url()."Sign/login"; ?>">
          <div class="input-box">
			<input type="text" placeholder="User Name" name="email"  onblur="this.placeholder = 'User Name'" onfocus="this.placeholder = ''" autocomplete="off">
          <span class="user"><img src="<?php echo base_url() ?>assets/fronted/images/user-icon.png"></span>
          </div>
          <div class="input-box">
				<input type="password" placeholder="Password" name="password" onblur="this.placeholder = 'Password'" onfocus="this.placeholder = ''" autocomplete="off">
          <span class="password"><img src="<?php echo base_url() ?>assets/fronted/images/password.png"></span>
          </div>
           <div class="input-box">
				<input type="submit" value="SUBMIT" class="signin">
          </div>
          <p><a href="#" class="forget">Forgot Password</a></p>
          <small>Don't have an account? <a class="sign1" href="#">Sign-up</a></small>
        </form>
      </div>
</div>
<div class="overly"></div>

<div class="forgot-password">
<div class="forgot-password2">
<h3>Forget Password</h3>
       <form class="" method="post" id="mail" action="<?php echo base_url()."admin/login/mail_send"; ?>">
         <div class="input-box">
			<input type="text" placeholder="Your Email" name="email"  onblur="this.placeholder = 'Your Email'" onfocus="this.placeholder = ''">
         </div>
          <input type="submit" value="SUBMIT" class="submit">
       </form>
     </div>
</div>
<div class="overly"></div>

<a class="signup" href="#">SIGN-UP</a>
<div class="login-box2">
<div class="login-detail">
<h3>SIGN-UP</h3>
        <form id="register" method="post" action="<?php echo base_url()."Sign/sign_up"; ?>">
          <div class="input-box">
			<input type="text" placeholder="User Name:" name="name" required onblur="this.placeholder = 'User Name'" onfocus="this.placeholder = ''" autocomplete="off">
          <span class="user"><img src="<?php echo base_url() ?>assets/fronted/images/user-icon.png"></span>
          </div>
          <div class="input-box">
          <input type="text" placeholder="Email:" name="email" onblur="this.placeholder = 'Email:'" onfocus="this.placeholder = ''" autocomplete="off">
          <span class="ed-mail"><img src="<?php echo base_url() ?>assets/fronted/images/ed-mail.png"></span>
          </div>
          <div class="input-box">
          <input type="password" placeholder="Password:" id="password" name="password" onblur="this.placeholder = 'Password:'" onfocus="this.placeholder = ''" autocomplete="off">
          <span class="password2"><img src="<?php echo base_url() ?>assets/fronted/images/password.png"></span>
		  </div>
          <div class="input-box">
          <input type="password" placeholder="Confirm Password:" name="confirm_password" onblur="this.placeholder = 'Confirm Password:'" onfocus="this.placeholder = ''" autocomplete="off">
          </div>
		  <div class="div-box" style="margin-bottom:10px;">
          <span><input name="usertype" type="radio" value="2"> Agent </span>
		  <span><input name="usertype" type="radio" value="3" style="margin-left:50px;"> User </span>
          </div>
          <div class="div-box">
          <span><input name="radio" type="checkbox" value="1"></span>
          <p>I agree to the company <a href="">Terms of Service and </a><br><a href="">Privacy Policy</a></p>
          </div>
          <div class="input-box">
          <input type="submit" value="SUBMIT" class="signin">
          </div>
          <div class="div-box">
          <p class="already">Already have an account? <a href="#" class="log1">Login</a></p>
          </div>
        </form>
      </div>
</div>
<div class="overly"></div>

<?php }else{ ?><div class="profile-box"><a href="javascript:void(0)" class="my-homes"><img src="<?php foreach($result as $u_img){ if(!empty($u_img->image)){ echo base_url()."assets/agent_images/".$u_img->image; }else{ echo base_url()."assets/fronted/images/user_icon.png"; }}?>"><span><?php $name=$this->session->userdata('u_name'); echo "Welcome ! ".$name; ?></span></a>

<div class="my-homes2">
<samp><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==3){ echo base_url()."home/profile_personal/".base64_encode($id); }elseif($u_role==2){ echo base_url()."home/profile_professional/".base64_encode($id); } ?>">View Profile</a></samp>
<samp><a href="<?php if($u_role==2){ echo base_url()."dashboard/agent"; }elseif($u_role==3){ echo base_url()."dashboard/user"; }?>" target="_blank">My Account</a></samp>
<samp><a href="<?php echo base_url()."Sign/logout"?>">Logout</a></samp>
</div>
</div>
<?php } ?>
</div>
</div>
</header>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
    <script>
	$('.my-homes').click(function(){
			$('.my-homes2').slideToggle(); 
		});
    $( document ).ready(function() {
		$("#register").validate({
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				usertype: {
					required: true
			},
				radio: "required"
			},
			messages: {
				name: "Please enter your name",
				    email: {
					required: "Enter your email address",
					email: "Your email address must be in the format of name@domain.com"
					},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide confirm a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				usertype: {
					required: "Please select user type"
				},
				radio: "Please accept Term & Privacy Policy"
			}
		});
		$("#login_form").validate({
			rules: {
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				    email: {
					required: "Enter your email address",
					email: "Your email address must be in the format of name@domain.com"
					},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				}
			}
			});
			$("#mail").validate({
			rules: {
				email: {
					required: true,
					email: true
				}
			},	
			messages: {
				    email: {
					required: "Please enter your email id",
					email: "Your email address must be in the format of name@domain.com"
					}
			}	
		});
    }); 
</script>



