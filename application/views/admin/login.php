<head>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<!--Core CSS -->
    <link href="<?php echo base_url() ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<title>Admin Login Page</title>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" />
</head>


<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/bs3/js/bootstrap.min.js"></script><?php error_reporting(0);?>
  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="<?php echo base_url()."admin/login/validate"?>" method="post" name="f1" id="register-form">
	  <?php $msg=$this->input->get('msg'); 
			if($msg=='unsuccessful')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Oopss!</strong> Wrong Email id and password.
                            </div>
		<?php	} ?>
		<?php $msg=$this->input->get('msg'); 
			if($msg=='notmatch')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Oopss!</strong> You Entered Wrong Email Id.
                            </div>
		<?php	} ?>
			<?php $msg=$this->input->get('msg'); 
			if($msg=='sendmail')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong>New Password Has been Send .
                            </div>
		<?php	}
			?>
			<?php $detail=$this->Site_setting_model->site_detail(); foreach($detail as $logo){?>
       <center> <img src="<?php echo base_url()."assets/images/".$logo->site_logo; ?>" alt="" height="65"> </center>
	<?php } ?>

        <div class="login-wrap">
            <div class="user-login-info">
				                <input type="text" class="form-control" name="name" placeholder="Email" autocomplete="off" autofocus style="border: 1px solid #666; color:#000;">

                <input type="password" class="form-control" name="pass" placeholder="Password" style="  border: 1px solid #666; color:#000;">
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

        </div>
</form>
          <!-- Modal -->
          <!-- modal -->

      

    </div>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
    <script>
    $( document ).ready(function() {
		$("#register-form").validate({
			rules: {
				name: {
					required: true,
					email: true
				},
				pass: {
					required: true
				}
			},
				
			messages: {
				    name: {
					required: "Please enter your email id",
					email: "Your email address must be in the format of name@domain.com"
					},
				pass: {
					required: "Please provide a password"
					}
			}
			
		});
		
    }); 
   
    </script>

</body>
