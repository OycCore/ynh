<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Edit Client </li>
					</ol>
				</div>
                
                <section class="panel">  
                    <div class="panel-body">
					<?php foreach($list as $detail) {?>
					<div class="position-center">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Home_highlight/update_feature"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="i_heading" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" required id="name" value="<?php echo $detail->name; ?>" autocomplete="off">
							<input type="hidden" name="id" value="<?php echo $detail->id; ?>">
                                </div>
                            </div><br>
							
							<div class="form-group">
												<label for="file" class="col-sm-2 control-label col-lg-2">Image</label>
												<div class="col-lg-10 m-bot15">
												<input type="hidden" name="img" value="<?php echo $detail->image; ?>">
												<img src="<?php echo base_url()."assets/images/".$detail->image; ?>" width=100 height=100 style="border:1px solid #666;">
													<input type="file" id="file" name="file">
												</div>
							</div>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary submit"> Update </button>
                                </div>
                            </div>
							
							</form>
						</div>
					<?php } ?>

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
				name: "required"
			},
			
			messages: {
				name: "Please enter Heading"
			}
			
		});
    }); 
   

   
   
    </script>


				

