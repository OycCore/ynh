<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<style>
	
.form-control{
	color:#000;
	border:1px solid #9f9f9f;
}
.control-label{
	font-size:1.2em !important;
}
</style>
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Change Password </li>
					</ol>
				</div>
                <section class="panel">
                    
                    <div class="panel-body">
                        <div class="position-center">
						
                            <form class="form-horizontal" name="f1" id="register-form" action="<?php echo base_url()."admin/agent/update_password"; ?>" method="post">
							<div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label"> New Password </label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="npass" value=""  id="password">
									<input type="hidden" class="form-control" name="id" value="<?php echo $aid; ?>">
                                </div>
                            </div><br>

							<div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label"> Confirm Password </label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="cpass" value="">
                                </div>
                            </div><br>
							
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary"> Update </button>
                                </div>
                            </div>
                        </form>
						
                        </div>

					</div>
				</section>
			</div>
		</div>
	</section>
</section>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
    <script>
    $( document ).ready(function() {
		$("#register-form").validate({
			rules: {
				npass: {
					required: true,
					minlength: 5
				},
				cpass: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				}
			},
				
			messages: {
				npass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				cpass: {
					required: "Please provide confirm a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				}
			}
		});
    }); 
   
    </script>



				

