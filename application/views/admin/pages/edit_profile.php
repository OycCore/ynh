<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Edit Profile </li>
					</ol>
				</div>
                <section class="panel">
                    <div class="panel-body">
                        <div class="position-center">
						<?php foreach($list as $detail){?>
                            <form class="form-horizontal" id="form" name="f1" action="<?php echo base_url()."admin/agent/update_profile"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" value="<?php echo $detail->name; ?>" required>
									<input type="hidden" class="form-control" name="id" value="<?php echo $detail->id; ?>">
                                </div>
                            </div><br>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" name="email" value="<?php echo $detail->email; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="phone" class="col-lg-2 col-sm-2 control-label">Phone No</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $detail->phone; ?>" required>
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
								<label for="type" class="col-lg-2 col-sm-2 control-label">Your Interest</label>
								<div class="col-lg-8">
									<select class="form-control m-bot15" name="agent_interest" id="type">
									<?php foreach($interest as $list1){ if($list1->id==$detail->interest){?>
									<option value="<?php echo $list1->id; ?>"> <?php echo $list1->name; ?> </option>
									<?php } }?>
											<option value="">--- Select ---</option>
											<?php foreach($interest as $list1){ ?>
											<option value="<?php echo $list1->id; ?>"> <?php echo $list1->name; ?> </option>
											<?php } ?>
									</select>
								</div>
							</div>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Company </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="company" value="<?php echo $detail->company; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Facebook </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="facebook" value="<?php echo $detail->facebook; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Twitter </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="twitter" value="<?php echo $detail->twitter; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Google+ </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="google" value="<?php echo $detail->google; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Fav Restaurant </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="restaurant" value="<?php echo $detail->restaurant; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Fav Activity </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="activity" value="<?php echo $detail->activity; ?>">
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
                                <label for="company" class="col-lg-2 col-sm-2 control-label"> Address </label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="address"><?php echo $detail->address; ?></textarea>
                                </div>
                            </div>
							<br>
							
							<div class="form-group">
								<label for="file1" class="col-lg-2 col-sm-2 control-label"> Image </label>
									<div class="col-lg-8 m-bot15">
											<input type="file" id="file" name="file">
											<input type="hidden" name="img" value="<?php echo $detail->image; ?>">
											<img src="<?php echo base_url()."assets/agent_images/".$detail->image; ?>" width=100 height=100 style="border:1px solid #666;">
									</div>
							</div><br>

							<div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label"> Business Hours</label>
                                <div class="col-lg-10">
								<?php $b=$detail->b_hour; $hour=explode(",",$b); ?>
								<?php if(!empty($hour[4])) { ?>
                                    <select class="form-control" name="day1" style="width:15%; float: left;  margin-right: 10px;">
										<option value="mon" <?php if($hour[0]=="mon"){ echo "selected"; }?> > Mon </option>
										<option value="tue" <?php if($hour[0]=="tue"){ echo "selected"; }?> > Tue </option>
										<option value="wed" <?php if($hour[0]=="wed"){ echo "selected"; }?> > Wed </option>
										<option value="thur" <?php if($hour[0]=="thur"){ echo "selected"; }?> > Thur </option>
										<option value="fri" <?php if($hour[0]=="fri"){ echo "selected"; }?> > Fri </option>
										<option value="sat" <?php if($hour[0]=="sat"){ echo "selected"; }?> > Sat </option>
										<option value="sun" <?php if($hour[0]=="sun"){ echo "selected"; }?> > Sun </option>
									</select>
									<select class="form-control" name="day2" style="width:15%; float: left;  margin-right: 10px;">
										<option value="mon" <?php if($hour[1]=="mon"){ echo "selected"; }?> > Mon </option>
										<option value="tue" <?php if($hour[1]=="tue"){ echo "selected"; }?> > Tue </option>
										<option value="wed" <?php if($hour[1]=="wed"){ echo "selected"; }?> > Wed </option>
										<option value="thur" <?php if($hour[1]=="thur"){ echo "selected"; }?> > Thur </option>
										<option value="fri" <?php if($hour[1]=="fri"){ echo "selected"; }?> > Fri </option>
										<option value="sat" <?php if($hour[1]=="sat"){ echo "selected"; }?> > Sat </option>
										<option value="sun" <?php if($hour[1]=="sun"){ echo "selected"; }?> > Sun </option>
									</select>
									<select class="form-control" name="time1" style="width:15%; float: left;  margin-right: 10px;">
										<option value="1" <?php if($hour[2]=="1"){ echo "selected"; }?> > 1 </option>
										<option value="2" <?php if($hour[2]=="2"){ echo "selected"; }?> > 2 </option>
										<option value="3" <?php if($hour[2]=="3"){ echo "selected"; }?> > 3 </option>
										<option value="4" <?php if($hour[2]=="4"){ echo "selected"; }?> > 4 </option>
										<option value="5" <?php if($hour[2]=="5"){ echo "selected"; }?> > 5 </option>
										<option value="6"<?php if($hour[2]=="6"){ echo "selected"; }?> > 6 </option>
										<option value="7" <?php if($hour[2]=="7"){ echo "selected"; }?> > 7 </option>
										<option value="8" <?php if($hour[2]=="8"){ echo "selected"; }?> > 8 </option>
										<option value="9" <?php if($hour[2]=="9"){ echo "selected"; }?> > 9 </option>
										<option value="10" <?php if($hour[2]=="10"){ echo "selected"; }?> > 10 </option>
										<option value="11"<?php if($hour[2]=="11"){ echo "selected"; }?> > 11 </option>
										<option value="12" <?php if($hour[2]=="12"){ echo "selected"; }?> > 12 </option>
									</select>
									<select class="form-control" name="period1" style="width:15%; float: left;  margin-right: 10px;">
										<option value="am" <?php if($hour[3]=="am"){ echo "selected"; }?> > AM </option>
										<option value="pm" <?php if($hour[3]=="pm"){ echo "selected"; }?> > PM </option>
									</select>
									<select class="form-control" name="time2" style="width:15%; float: left;  margin-right: 10px;">	
										<option value="1" <?php if($hour[4]=="1"){ echo "selected"; }?> > 1 </option>
										<option value="2" <?php if($hour[4]=="2"){ echo "selected"; }?> > 2 </option>
										<option value="3" <?php if($hour[4]=="3"){ echo "selected"; }?> > 3 </option>
										<option value="4" <?php if($hour[4]=="4"){ echo "selected"; }?> > 4 </option>
										<option value="5" <?php if($hour[4]=="5"){ echo "selected"; }?> > 5 </option>
										<option value="6" <?php if($hour[4]=="6"){ echo "selected"; }?> > 6 </option>
										<option value="7" <?php if($hour[4]=="7"){ echo "selected"; }?> > 7 </option>
										<option value="8" <?php if($hour[4]=="8"){ echo "selected"; }?> > 8 </option>
										<option value="9" <?php if($hour[4]=="9"){ echo "selected"; }?> > 9 </option>
										<option value="10" <?php if($hour[4]=="10"){ echo "selected"; }?> > 10 </option>
										<option value="11" <?php if($hour[4]=="11"){ echo "selected"; }?> > 11 </option>
										<option value="12" <?php if($hour[4]=="12"){ echo "selected"; }?> > 12 </option>
									</select>
									<select class="form-control" name="period2" style="width:15%; float: left;">
										<option value="am" <?php if($hour[5]=="am"){ echo "selected"; }?> > AM </option>
										<option value="pm" <?php if($hour[5]=="pm"){ echo "selected"; }?> > PM </option>
									</select>
						<?php }else{ ?>
								<select class="form-control" name="day1" style="width:15%; float: left;  margin-right: 10px;">
										<option value="mon" > Mon </option>
										<option value="tue" > Tue </option>
										<option value="wed" > Wed </option>
										<option value="thur" > Thur </option>
										<option value="fri" > Fri </option>
										<option value="sat" > Sat </option>
										<option value="sun" > Sun </option>
									</select>
									<select class="form-control" name="day2" style="width:15%; float: left;  margin-right: 10px;">
										<option value="mon" > Mon </option>
										<option value="tue" > Tue </option>
										<option value="wed" > Wed </option>
										<option value="thur" > Thur </option>
										<option value="fri" > Fri </option>
										<option value="sat" > Sat </option>
										<option value="sun" > Sun </option>
									</select>
									<select class="form-control" name="time1" style="width:15%; float: left;  margin-right: 10px;">
										<option value="1" > 1 </option>
										<option value="2" > 2 </option>
										<option value="3" > 3 </option>
										<option value="4" > 4 </option>
										<option value="5" > 5 </option>
										<option value="6" > 6 </option>
										<option value="7" > 7 </option>
										<option value="8" > 8 </option>
										<option value="9" > 9 </option>
										<option value="10" > 10 </option>
										<option value="11" > 11 </option>
										<option value="12" > 12 </option>
									</select>
									<select class="form-control" name="period1" style="width:15%; float: left;  margin-right: 10px;">
										<option value="am" > AM </option>
										<option value="pm"> PM </option>
									</select>
									<select class="form-control" name="time2" style="width:15%; float: left;  margin-right: 10px;">	
										<option value="1" > 1 </option>
										<option value="2" > 2 </option>
										<option value="3" > 3 </option>
										<option value="4" > 4 </option>
										<option value="5" > 5 </option>
										<option value="6" > 6 </option>
										<option value="7" > 7 </option>
										<option value="8" > 8 </option>
										<option value="9" > 9 </option>
										<option value="10" > 10 </option>
										<option value="11" > 11 </option>
										<option value="12" > 12 </option>
									</select>
									<select class="form-control" name="period2" style="width:15%; float: left;">
										<option value="am" > AM </option>
										<option value="pm" > PM </option>
									</select>
						<?php } ?>
                                </div>
                            </div><br>
							
														
							<div class="form-group">
								<label for="file" class="col-sm-2 control-label col-lg-2">About Yourself</label>
									<div class="col-lg-8 m-bot15">
											<textarea class="form-control ckeditor" name="about_u" rows="6"><?php echo $detail->about; ?></textarea>
									</div>
							</div><br>
							
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
						<?php } ?>
                        </div>

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
		$("#form").validate({
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
			company: "required",
			day1: "required"
			},
			messages: {
				name: "Please enter your name",
				    email: {
					required: "We need your email address to contact you",
					email: "Your email address must be in the format of name@domain.com"
					},
			company: "Please enter your company"
			}
			
		});
    }); 
   
    </script>


				

