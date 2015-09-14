 <link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."dashboard/agent"; ?>"> Dashboard </a></li>
						<li> Make Property Boosting </li>
					</ol>
				</div>
               
		<section class="panel">
		<div class="position-center">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/checkout_form"; ?>" method="post">
							<div class="form-group">
								<label for="type" class="col-sm-3 control-label col-lg-3">Select Property</label>
									<div class="col-lg-8">
										<select class="form-control m-bot15" name="select_property">
											<option value="">--- Select ---</option>
											<?php foreach($detail as $list){?>
											<option value="<?php echo $list->id; ?>"> <?php echo $list->property; ?> </option>
											<?php } ?>
										</select>
									</div>
							</div>
						
							<div class="form-group">
								<label for="radio" class="col-lg-3 col-sm-3 control-label">Select Plan</label>
									<div class="col-lg-8">
									<?php foreach($plan as $boosted):?>
                                        <div class="radio single-row">
											<label> <b> <?php echo $boosted->name; ?> ($<?php echo $boosted->price; ?> for <?php echo $boosted->days; ?>days)</b> </label>
											<input tabindex="3" type="radio" name="plan_id" value="<?php echo $boosted->id; ?>">
										</div>
										<?php endforeach; ?>
									</div>
							</div>
							
							<div class="form-group">
                                                <div class="col-lg-offset-5 col-lg-10 m-bot15">
                                                    <button type="submit" class="btn btn-info"> Proceed </button>
                                                </div>
                                            </div>
							</form>
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
				select_property: "required",
				plan_id: "required"
			},
			
				
			messages: {
				select_property: "Please Select property",
				plan_id: "<b>Please select One Plan</b>"
				
			}
			
		});
    }); 
    </script>

				

