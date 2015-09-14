<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<style>
	
.form-control{
	color:#000;
	border:1px solid #9f9f9f;
}
.control-label{
	font-size:1.2em !important;
}
.find {
    background: #fff none repeat scroll 0 0;
    border-radius: 50%;
    color: #000;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    line-height: 1;
    margin-left: -12px;
    padding: 2px;
    vertical-align: top;
}
</style>
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->
	
        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Edit Property </li>
					</ol>
				</div>
                <section class="panel">
				<?php foreach($detail as $result){?>
                    <div class="panel-body">
					<div class="col-sm-10">

                                        <form class="form-horizontal col-sm-12" id="register" method="post" action="<?php echo base_url().'admin/property/update_property'?>" enctype="multipart/form-data">
                                            <div class="form-group">
												<label for="name" class="col-sm-3 control-label col-lg-3">Property Name</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="name" name="name" class="form-control" value="<?php echo $result->property; ?>">
													<input type="hidden" id="id" name="id" class="form-control" value="<?php echo $result->id; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="type" class="col-sm-3 control-label col-lg-3">Property For</label>
												<div class="col-lg-8">
													<select class="form-control m-bot15" name="type" id="type">
													<?php if($result->purpose==1) { ?>
														<option value="<?php echo $result->purpose; ?>">Sales</option>
													<?php }else{ ?>
													<option value="<?php echo $result->purpose; ?>">Rental</option>
													<?php } ?>
													<option value=""> --Select Property Type-- </option>
														<option value="1"> Sales </option>
														<option value="2"> Rental </option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="type" class="col-sm-3 control-label col-lg-3">Property Type</label>
												<div class="col-lg-8">
													<select class="form-control m-bot15" name="p_type">
													<?php foreach($type as $p_type){?>
													<?php $v=$p_type->id; if($result->type==$v){?>
														<option value="<?php echo $p_type->id; ?>"> <?php echo $p_type->type; ?> </option>
													<?php } } ?>
														<option value="">--- Select Type---</option>
														<?php foreach($type as $p_type){?>
														<option value="<?php echo $p_type->id; ?>"> <?php echo $p_type->type; ?> </option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="start" class="col-sm-3 control-label col-lg-3">Starting Price</label>
												<div class="col-lg-8 m-bot15">
														<input type="text" id="start" name="start" class="form-control" value="<?php echo $result->price1; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="last" class="col-sm-3 control-label col-lg-3">Last Price</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="last" name="last" class="form-control" value="<?php echo $result->price2; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="square" class="col-sm-3 control-label col-lg-3">Square Ft</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="square" name="square" class="form-control" value="<?php echo $result->square_ft; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="bedroom_" class="col-sm-3 control-label col-lg-3">Bedroom</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="bedroom_" name="bedroom_" class="form-control" value="<?php echo $result->bedroom; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="bathroom_" class="col-sm-3 control-label col-lg-3">Bathroom</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="bathroom_" name="bathroom_" class="form-control" value="<?php echo $result->bathroom; ?>">
												</div>
											</div>
                                            <div class="form-group">
												<label for="overview" class="col-sm-3 control-label col-lg-3">Overview</label>
												<div class="col-lg-8 m-bot15">
													<textarea class="form-control ckeditor" name="overview" rows="6"><?php echo $result->overview; ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="train_" class="col-sm-3 control-label col-lg-3">Trains</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" multiple name="train_[]" id="train" multiple>
													<?php foreach($list1 as $train){?>
														<option value="<?php echo $train->id; ?>" <?php $val=explode(',',$result->train); foreach($val as $res){
														if($res==$train->id){ echo "selected"; } }?>><?php echo $train->train; ?></option>
													<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="form-group">
												<label for="buses_" class="col-sm-3 control-label col-lg-3">Buses</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" multiple name="buses_[]" id="buses" multiple>
													<?php foreach($list2 as $bus){?>
														<option value="<?php echo $bus->id; ?>" <?php $val=explode(',',$result->buses); foreach($val as $res){
														if($res==$bus->id){ echo "selected"; } }?>><?php echo $bus->buses; ?></option>
												<?php } ?>	
													</select>
												</div>
											</div>								
								
											<div class="form-group">
												<label for="country" class="col-sm-3 control-label col-lg-3">Country</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" name="country" id="country">
													<?php $cid=$result->country; $this->load->model('Admin_model'); $cn=$this->Admin_model->country_byid($cid); foreach($cn as $val){?>
													<option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
													<?php } ?>
													<option value=""> --Select Country-- </option>
													<?php foreach($list3 as $country){?>
														<option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
														<?php } ?>
														</select>
												</div>
											</div>
											<div class="form-group">
												<label for="state" class="col-sm-3 control-label col-lg-3">State</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" name="state" id="state">
														<?php $cid=$result->state; $this->load->model('Admin_model'); $cn=$this->Admin_model->state_byid($cid); foreach($cn as $val){?>
													<option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
													<?php } ?>
													</select>

												</div>
											</div>
											
											<div class="form-group">
												<label for="city" class="col-sm-3 control-label col-lg-3">City</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" name="city" id="city">
														<?php $cid=$result->city; $this->load->model('Admin_model'); $cn=$this->Admin_model->city_byid($cid); foreach($cn as $val){?>
													<option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="location" class="col-sm-3 control-label col-lg-3">Location</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="location" name="location" class="form-control" value="<?php echo $result->location; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="landmarks" class="col-sm-3 control-label col-lg-3">Landmarks</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="landmarks" name="landmarks" class="form-control" value="<?php echo $result->landmark; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="school_" class="col-sm-3 control-label col-lg-3">School Districts</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="school_" name="school_" class="form-control" value="<?php echo $result->school; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="police_" class="col-sm-3 control-label col-lg-3">Police Precincts</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="police_" name="police_" class="form-control" value="<?php echo $result->police; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="image" class="col-sm-3 control-label col-lg-3">Feature Image</label>
												<div class="col-lg-8 m-bot15">
												<input type="hidden" name="fimg" id="f" value="<?php echo $result->feature_image; ?>">
												
												<img src="<?php echo base_url()."assets/property_images/".$result->feature_image; ?>" width=100 height=100 style="border:1px solid #666;">	
												
													<input type="file" <?php //if(empty($result->id)):?> name="image" <?php //endif; ?> id="image" >
												</div>
											</div>
										
											<div class="form-group">
												<label for="file" class="col-sm-3 control-label col-lg-3">Images</label>
												<div class="col-lg-8 m-bot15">
												<input type="hidden" name="image" value="<?php echo $result->images; ?>">
												
												<?php $img=$result->images; $val=explode(',',$img); foreach($val as $img){?>
												<input type="hidden" name="img" value="<?php echo $img; ?>">
												<img src="<?php echo base_url()."assets/property_images/".$img; ?>" width=100 height=100 style="border:1px solid #666;">
												<span class="find">X</span>
												<?php } ?>
													<input type="file" id="file" name="file[]" multiple>
												</div>
											</div>
											
																<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Listing Amenities</label>
												<div class="col-lg-8">
												<?php foreach($amenities1 as $listing){?>
                                                    <label class="checkbox-inline">
														<input type="checkbox" value="<?php echo $listing->id ; ?>" name="listing_amenity[]" multiple <?php $val=explode(',',$result->listing_amenities); foreach($val as $res){
														if($res==$listing->id){ echo "checked"; } }?>> <?php echo $listing->name; ?>
													</label>
												<?php } ?>
												</div>
											</div>
											
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Building Amenities</label>
												<div class="col-lg-8">
                                                    <?php foreach($amenities2 as $building) {?>
                                                    <label class="checkbox-inline">
														<input type="checkbox" value="<?php echo $building->id ; ?>" name="building_amenity[]" multiple <?php $val=explode(',',$result->building_amenities); foreach($val as $res){
														if($res==$building->id){ echo "checked"; } }?>> <?php echo $building->name; ?>
													</label>
												<?php } ?>
												</div>
											</div>
											
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Listing Include</label>
												<div class="col-lg-8">
                                                    <?php foreach($amenities3 as $include) {?>
                                                    <label class="checkbox-inline">
														<input type="checkbox" value="<?php echo $include->id ; ?>" name="include_list[]" multiple <?php $val=explode(',',$result->listing_include); foreach($val as $res){
														if($res==$include->id){ echo "checked"; } }?>> <?php echo $include->name; ?>
													</label>
												<?php } ?>
												</div>
											</div>
											
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Featured</label>
												<div class="col-lg-8">
                                                    <div class="radio single-row">
														<label> Yes </label> <input tabindex="3" type="radio" value="active" <?php $status=$result->featured; if($status=='active'){ echo "checked" ;}?> name="radio">
													</div>
													<div class="radio single-row">
														<label> No </label><input tabindex="3" type="radio" value="in active" <?php $status=$result->featured; if($status=='in active'){ echo "checked" ;}?> name="radio">
													</div>
												</div>
											</div>
										
											
                                            <div class="form-group">
                                                <div class="col-lg-offset-5 col-lg-10">
                                                    <button type="submit" class="btn btn-primary"> Update </button>
                                                </div>
                                            </div>
                                        </form>

						</div>
					</div>
				<?php } ?>
				</section>
			</div>
		</div>
	</section>
</section>
<script>
									$(document).ready(function() {
									$('#country').change(function () {
									var name = $('#country').val();
									var cnt_id = 'cnt=' + name;
									$.ajax({
									type:"POST",
									url:"<?php echo base_url()."admin/ajax_action/state_list";?>",
									data: cnt_id,
									success: function (html) {
									$('#state').html(html);
									}
									});
									return false;
									});
									}); 
									
									$(document).ready(function() {
									$('#state').change(function () {
									var name = $('#state').val();
									var st_id = 'st=' + name;
									$.ajax({
									type:"POST",
									url:"<?php echo base_url()."admin/ajax_action/city_list";?>",
									data: st_id,
									success: function (html) {
									$('#city').html(html);
									}
									});
									return false;
									});
									}); 
								</script>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
<script>
$( document ).ready(function() {
	$("#register").validate({
		rules: {
			name: "required",
			type: {
				required: true
		},
		p_type: {
				required: true
		},
			start: "required",
			last: "required",
			square: "required",
			overview: {
				required: true
			},
			country: {
				required: true
		},
			state: {
				required: true
		},
			city: {
				required: true
		},
			location: "required",
			 image: {
						accept: "jpg,png,jpeg,gif"
					}
			
		},
			
		messages: {
			name: "Please enter Property name",
			type: {
				required: "Please select Property Purpose"
			},
			p_type: {
				required: "Please select Property type"
			},
			start: "Please enter starting price",
			last: "Please enter last price",
			overview: "Please fill this field",
			country: {
				required: "Please select Country"
			},
			state: {
				required: "Please select State"
			},
			city: {
				required: "Please select City"
			},
			location: "Please fill this field",
			image: {
						accept: "only accept jpg,jpeg,png,gif file image"
					}
			
		}
		
	});
}); 

</script>
<script>
   $('.find').click(function () {	
     $(this).prev().prev().val();
     var context = $(this);
     $.post('<?php echo base_url()."admin/ajax_action/delete_image" ?>', {
       'gallery': $(this).prev().prev().val(),
       'id': $('#id').val()
      }, function (response) {
       if(response !== 'no'){
        $(context).prev().prev().remove();
        $(context).prev().remove();
        $(context).remove();
       }else{
        alert('try again.');
       }
      });
    });
</script>
