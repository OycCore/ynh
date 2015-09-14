<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">

<section id="main-content">
	<section class="wrapper">
        <!-- page start-->
	
        <div class="row">
            <div class="col-sm-12">
				<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:10px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Add New Agent </li>
					</ol>
				</div>
			
                <section class="panel">
                    
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-horizontal" id="register-form" action="<?php echo base_url()."admin/agent/insert"; ?>" method="post">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" autocomplete="off" autofocus>
                                </div>
                            </div><br>

                            <div class="form-group">
                                <label for="email" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control mail_id" name="email" id="email" placeholder="Email" autocomplete="off"  onblur="match()">
                                </div>
                            </div><br>
							
                            <div class="form-group">
                                <label for="password" class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                                </div>
                            </div><br>
							
                            <div class="form-group">
                                <label for="confirm_password" class="col-lg-2 col-sm-2 control-label">Confirm Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="usertype" class="col-lg-2 col-sm-2 control-label">User Type</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="usertype" id="usertype">
										<option value="">--- Select--</option>
										<option value="2"> Agent </option>
										<option value="3"> User </option>
                            </select>
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="radio" class="col-lg-2 col-sm-2 control-label">Available</label>
                                <div class="col-lg-10">
                                                                               <div class="radio single-row">
                                                <label> Yes </label> <input tabindex="3" type="radio" value="1" name="radio">
                                                
                                            </div>

                                            <div class="radio single-row">
                                                <label> No </label><input tabindex="3" type="radio" value="0" name="radio">
                                                
                                            </div>

                                </div>
                            </div>
							<br>
							
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
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
					required: "We need your email address to contact you",
					email: "Your email address must be in the format of name@domain.com"
					},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				usertype: {
					required: "Please select Admin type"
				},
				radio: "<b>Please enter availibility</b>"
			}
			
		});
    }); 
    </script>
<script>
    function match() {
			var email = $('.mail_id').val();
												$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Ajax_action/match_email";?>",
												data: {
														'id': email
														},
												success:function(response){
													if(response){
														alert("This email id already exist.");
													}
												}
												});
		}
</script>	


				

