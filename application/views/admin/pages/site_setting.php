<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                    <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
						<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
							<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
							<li> Manage Site Setting </li>
						</ol>
					</div>
                
                <section class="panel">
                    <?php $msg=$this->input->get('m'); 
			if($msg=='success')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> Detail has been Updated Successfully.
                            </div>
		<?php	}
			?>
                    <div class="panel-body">
			
					<?php foreach($list as $detail){ ?>
						
						<div class="position-center">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Site_setting/edit"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Site Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" required id="name" autocomplete="off" value="<?php echo $detail->site_name; ?>">
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="title" class="col-lg-2 col-sm-2 control-label">Site Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="title" id="title"  autocomplete="off" value="<?php echo $detail->site_title; ?>">
								</div>
                            </div><br>
							
							<div class="form-group">
												<label for="video" class="col-sm-2 control-label col-lg-2">Site Logo</label>
												<div class="col-lg-10 m-bot15">
												<img src="<?php echo base_url()."assets/images/".$detail->site_logo; ?>" width=200 height=50 style="border:1px solid #666;">	
												
													<input type="file" id="file" name="file">
													<input type="hidden" name="img" value="<?php echo $detail->site_logo; ?>">
												</div>
							</div>
							
							<div class="form-group">
												<label for="video" class="col-sm-2 control-label col-lg-2">Site Favicon</label>
												<div class="col-lg-10 m-bot15">
												<img src="<?php echo base_url()."assets/images/".$detail->site_favicon; ?>" width=20 height=20 style="border:1px solid #666;">	
												
													<input type="file" id="file" name="file1">
													<input type="hidden" name="img1" value="<?php echo $detail->site_favicon; ?>">
												</div>
							</div>
							
							<div class="form-group">
                                <label for="phone" class="col-lg-2 col-sm-2 control-label">Phone No.</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $detail->phone; ?>" autocomplete="off">
								
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Email Id</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $detail->email; ?>" autocomplete="off">
									
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="facebook" class="col-lg-2 col-sm-2 control-label">Facebook</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="facebook" id="facebook"  autocomplete="off" value="<?php echo $detail->facebook; ?>">
								</div>
                            </div><br>
							<div class="form-group">
                                <label for="twitter" class="col-lg-2 col-sm-2 control-label">Twitter</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="twitter" id="twitter"  autocomplete="off" value="<?php echo $detail->twitter; ?>">
								</div>
                            </div><br>
							<div class="form-group">
                                <label for="google" class="col-lg-2 col-sm-2 control-label">Google +</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="google" id="google"  autocomplete="off" value="<?php echo $detail->google; ?>">
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="copyright" class="col-lg-2 col-sm-2 control-label">Cpoy-Right</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="copyright" id="copyright"  autocomplete="off" value="<?php echo $detail->copyright; ?>">
								</div>
                            </div><br>

                            <div class="form-group">
                                <label for="address" class="col-lg-2 col-sm-2 control-label">Address</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="address" cols="5" rows="5"><?php echo $detail->address; ?></textarea>
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <label for="p_username" class="col-lg-2 col-sm-2 control-label">Paypal Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="p_username" id="p_username" value="<?php echo $detail->paypal_username; ?>" autocomplete="off">
								
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="p_pass" class="col-lg-2 col-sm-2 control-label">Paypal Password</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="p_pass" id="p_pass" value="<?php echo $detail->paypal_password; ?>" autocomplete="off">
								
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="p_sign" class="col-lg-2 col-sm-2 control-label">Paypal Signature</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="p_sign" id="p_sign" value="<?php echo $detail->paypal_signature; ?>" autocomplete="off">
								
								</div>
                            </div><br>
							
							<div class="form-group">
                                <label for="p_sign" class="col-lg-2 col-sm-2 control-label">Paypal Url</label>
								<div class="col-lg-8">
                                    <div class="radio single-row">
									<label> Sandbox Url </label> <input tabindex="3" type="radio" value="0" <?php $status=$detail->paypal_url; if($status=='0'){ echo "checked" ;}?> name="p_url">
									</div>
									<div class="radio single-row">
									<label> Live Url </label><input tabindex="3" type="radio" value="1" <?php $status=$detail->paypal_url; if($status=='1'){ echo "checked" ;}?> name="p_url">
									</div>
								</div>					
                            </div><br>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary submit"> Update </button>
                                </div>
                            </div>
							
							</form>
						</div>
						
				<?php	}	?>

					</div>
				</section>
			</div>
		</div>
	</section>
</section>

<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
<script>

    $( document ).ready(function() {
		$("#register").validate({
			rules: {
				name: "required",
				title: "required",
					 phone: {
                required: true,
                minlength: 10,
                phoneUS: true
            },
					email: {
					required: true,
					email: true
				},
				address:"required"
				},
			
			messages: {
				name: "Please Enter Name",
				title: "Please Enter Title",
					phone: {
                required: "Please enter your phone number",
                phoneUS: "Please enter a valid phone number: (e.g. 19999999999 or 9999999999)"
            },
					email: {
					required: "We need your email address to contact you",
					email: "Your email address must be in the format of name@domain.com"
					},
					address: "Please fill this field"
			}
			
		});
    }); 
    </script>
<script>
setTimeout(function() {
$('.alert').delay(2000).slideUp('slow');
    });
</script>
				

