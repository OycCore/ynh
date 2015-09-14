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
		<?php foreach($list as $detail){?>
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Edit <?php echo $detail->name; ?> ! </li>
					</ol>
				</div>
                <section class="panel">
                    
                    <div class="panel-body">
                        <div class="position-center">
						
                            <form class="form-horizontal" name="f1" id="register-form" action="<?php echo base_url()."admin/agent/update"; ?>" method="post">
							<div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" value="<?php echo $detail->name; ?>" >
									<input type="hidden" class="form-control" name="id" value="<?php echo $detail->id; ?>">
                                </div>
                            </div><br>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" name="email" value="<?php echo $detail->email; ?>" >
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">User Type</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="usertype">
									<?php $v=$detail->admin_type; if($v==3){?>
									<option value="3"> User</option>
									<?php }else{?>
									<option value="2"> Agent </option>
									<?php } ?>
										<option> Select User Type </option>
										<option value="3"> User</option>
										<option value="2"> Agent </option>
                            </select>
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Available</label>
                                <div class="col-lg-10 radio" style="  padding-left: 36px;">
                                   <input tabindex="3" type="radio"  name="radio" value="1" <?php $status=$detail->status; if($status==1){ echo "checked" ;}?> >
                                                <label>Yes</label><br>
												<input tabindex="3" type="radio"  name="radio" value="0" <?php $status=$detail->status; if($status==0){ echo "checked" ;}?>>
                                                <label>No</label>
                                </div>
                            </div>
							<br>
							
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
			<?php } ?>
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
				usertype: {
					required: "Please select Admin type"
				},
				radio: "Please enter availibility"
			}
			
		});
    }); 
   
    </script>



				

