<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>

<section id="main-content">
	<section class="wrapper">
        <!-- page start-->
	
        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Add New Property </li>
					</ol>
				</div>
                <section class="panel">
				<?php $msg=$this->input->get('m'); 
			if($msg=='error')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Oops! </strong> Something is wrong.
                            </div>
		<?php	}
			?>
                    <div class="panel-body">
					<div class="col-sm-10">

                                        <form class="form-horizontal col-sm-12" id="register" method="post" action="<?php echo base_url().'admin/property/insert'?>" enctype="multipart/form-data">
                                            <input type="hidden" name="boosted" class="form-control" value="no">
											<div class="form-group">
												<label for="name" class="col-sm-3 control-label col-lg-3">Property Name</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="name" name="name" required class="form-control" placeholder="Property Name">
												</div>
											</div>
											<div class="form-group">
												<label for="type" class="col-sm-3 control-label col-lg-3">Property For</label>
												<div class="col-lg-8">
													<select class="form-control m-bot15" name="type" id="type">
														<option value="">--- Select ---</option>
														<option value="1"> Sales </option>
														<option value="2"> Rental </option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="type" class="col-sm-3 control-label col-lg-3">Property Type</label>
												<div class="col-lg-8">
													<select class="form-control m-bot15" name="p_type">
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
														<input type="text" id="start" name="start" class="form-control" placeholder="00.00">
												</div>
											</div>
											<div class="form-group">
												<label for="last" class="col-sm-3 control-label col-lg-3">Last Price</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="last" name="last" class="form-control" placeholder="00.00">
												</div>
											</div>
											<div class="form-group">
												<label for="square" class="col-sm-3 control-label col-lg-3">Square Ft</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="square" name="square" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="bedroom_" class="col-sm-3 control-label col-lg-3">Bedroom</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="bedroom_" name="bedroom_" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="bathroom_" class="col-sm-3 control-label col-lg-3">Bathroom</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="bathroom_" name="bathroom_" class="form-control">
												</div>
											</div>
                                            <div class="form-group">
												<label for="overview" class="col-sm-3 control-label col-lg-3">Overview</label>
												<div class="col-lg-8 m-bot15">
													<textarea class="form-control ckeditor" id="overview" name="overview" rows="6"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="train_" class="col-sm-3 control-label col-lg-3">Trains</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" multiple name="train_[]" id="train" multiple>
													<?php foreach($list1 as $train){?>
														<option value="<?php echo $train->id; ?>"><?php echo $train->train; ?></option>
													<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="form-group">
												<label for="buses_" class="col-sm-3 control-label col-lg-3">Buses</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" multiple name="buses_[]" id="buses" multiple>
													<?php foreach($list2 as $bus){?>
														<option value="<?php echo $bus->id; ?>"><?php echo $bus->buses; ?></option>
												<?php } ?>	
													</select>
												</div>
											</div>
                    
											<div class="form-group">
												<label for="country" class="col-sm-3 control-label col-lg-3">Country</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" name="country" id="country">
													<option value="">--- Country ---</option>
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
														<option value="">--- State ---</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label for="city" class="col-sm-3 control-label col-lg-3">City</label>
												<div class="col-lg-6">
													<select class="form-control m-bot15" name="city" id="city">
														<option value="">--- City ---</option>
														
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="location" class="col-sm-3 control-label col-lg-3">Location</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="location" name="location" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="landmarks" class="col-sm-3 control-label col-lg-3">Landmarks</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="landmarks" name="landmarks" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="school_" class="col-sm-3 control-label col-lg-3">School Districts</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="school_" name="school_" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="police_" class="col-sm-3 control-label col-lg-3">Police Precincts</label>
												<div class="col-lg-8 m-bot15">
													<input type="text" id="police_" name="police_" class="form-control">
												</div>
											</div>
											
											<div class="form-group">
												<label for="image" class="col-sm-3 control-label col-lg-3">Feature image</label>
												<div class="col-lg-8 m-bot15">
													<input type="file" id="image" name="image">
												</div>
											</div>
											
											<div class="form-group">
												<label for="file" class="col-sm-3 control-label col-lg-3">Images</label>
												<div class="col-lg-8 m-bot15">
													<input type="file" id="file" name="file[]" multiple>
												</div>
											</div>
											
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Listing Amenities</label>
												<div class="col-lg-8">
												<?php foreach($amenities1 as $listing){?>
                                                    <label class="checkbox-inline">
														<input type="checkbox" value="<?php echo $listing->id ; ?>" name="listing_amenity[]" multiple> <?php echo $listing->name; ?>
													</label>
												<?php } ?>
												</div>
											</div>
											
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Building Amenities</label>
												<div class="col-lg-8">
                                                    <?php foreach($amenities2 as $building) {?>
                                                    <label class="checkbox-inline">
														<input type="checkbox" value="<?php echo $building->id ; ?>" name="building_amenity[]" multiple> <?php echo $building->name; ?>
													</label>
												<?php } ?>
												</div>
											</div>
											
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Listing Include</label>
												<div class="col-lg-8">
                                                    <?php foreach($amenities3 as $include) {?>
                                                    <label class="checkbox-inline">
														<input type="checkbox" value="<?php echo $include->id ; ?>" name="include_list[]" multiple> <?php echo $include->name; ?>
													</label>
												<?php } ?>
												</div>
											</div>
											<div class="form-group">
												<label for="radio" class="col-lg-3 col-sm-3 control-label">Featured</label>
												<div class="col-lg-8">
                                                    <div class="radio single-row">
														<label> Yes </label> <input tabindex="3" type="radio" value="active" name="radio">
													</div>
													<div class="radio single-row">
														<label> No </label><input selected tabindex="3" type="radio" value="in active" name="radio">
													</div>
												</div>
											</div>
											
                                            <div class="form-group">
                                                <div class="col-lg-offset-5 col-lg-10">
                                                    <button type="submit" class="btn btn-info">Submit</button>
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
				start: {
						required: true,
						number: true
					},
				last: {
						required: true,
						number: true
					},
				square: {
						required: true,
						number: true
					},
				bedroom_: {
						required: true,
						number: true
					},
				bathroom_: {
						required: true,
						number: true
					},					
				overview: {
					required:true
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
				school_: {
						required: true,
						number: true
					},
				police_: {
						required: true,
						number: true
				},
				    image: {
						required: true,
						accept: "jpg,png,jpeg,gif"
					},
					'listing_amenity[]': {
                required: true,
                maxlength: 5
            },
			'building_amenity[]': {
                required: true,
                maxlength: 5
            },
			'include_list[]': {
                required: true,
                maxlength: 5
            },
			'buses_[]': {
                required: true,
                maxlength: 5
            },
			'train_[]': {
                required: true,
                maxlength: 5
            },
			radio: "required"
			
			},
			
				
			messages: {
				name: "Please enter Property name",
				type: {
					required: "Please select Property Purpose"
				},
				p_type: {
					required: "Please select Property Type"
				},
				start:{
						required: "Please enter starting price",
						number: "Please Enter Only Numeric value"
					}, 
				last: {
						required: "Please enter last price",
						number: "Please Enter Only Numeric value"
					},
				square: {
						required: "Please Enter This Field",
						number: "Please Enter Only Numeric value"
					},
				bedroom_: {
						required: "Please Enter Bedrooms",
						number: "Please Enter Only Numeric value"
					},
				bathroom_: {
						required: "Please Enter Bathrooms",
						number: "Please Enter Only Numeric value"
					},
				overview:{
                        required:"Please enter Text"
					},
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
				school_: {
						required: "Please Enter This Field",
						number: "Please Enter Only Numeric value"
					},
				police_: {
						required: "Please Enter This Field",
						number: "Please Enter Only Numeric value"
					},
				image: {
						required:"Please select image",
						accept: "only accept jpg,jpeg,png,gif file image"
					},
				'listing_amenity[]': {
						required: "You must check at least 1 box",
						maxlength: "Check no more than {0} boxes"
            },
			'building_amenity[]': {
                required: "You must check at least 1 box",
				maxlength: "Check no more than {0} boxes"
            },
			'include_list[]': {
                required: "You must check at least 1 box",
				maxlength: "Check no more than {0} boxes"
            },
			'buses_[]': {
               required: "You must check at least 1 box",
				maxlength: "Check no more than {0} boxes"
            },
			'train_[]': {
               required: "You must check at least 1 box",
				maxlength: "Check no more than {0} boxes"
            },
			radio: "<b>Please Select One</b>"
			
			}
			
		});
    }); 
   
    </script>
	
	
