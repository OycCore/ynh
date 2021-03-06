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
						<li> Edit Banner Image </li>
					</ol>
				</div>
                
                <section class="panel">  
                    <div class="panel-body">
					<?php foreach($list as $detail) {?>
					<div class="position-center">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Home_highlight/update_image"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="i_heading" class="col-lg-2 col-sm-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="i_heading" required id="i_heading" value="<?php echo $detail->heading; ?>" autocomplete="off">
							<input type="hidden" name="id" value="<?php echo $detail->id; ?>">
                                </div>
                            </div><br>
							
							<div class="form-group">
												<label for="file" class="col-sm-2 control-label col-lg-2">Image</label>
												<div class="col-lg-10 m-bot15">
												<input type="hidden" name="img" id="f" value="<?php echo $detail->image; ?>">
												<img src="<?php echo base_url()."assets/images/".$detail->image; ?>" width=100 height=100 style="border:1px solid #666;">
													<input type="file" id="file" name="file">
												</div>
							</div>

                            <div class="form-group">
                                <label for="detail" class="col-lg-2 col-sm-2 control-label">Content</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor" id="detail" name="detail" rows="6"><?php echo $detail->content; ?></textarea>
                                </div>
                            </div><br>
							
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
				i_heading: "required",
					detail:"required"
			},
				
			messages: {
				i_heading: "Please enter Image Heading",
				detail: "Please fill this field"
			}
			
		});
    }); 
   

   
   
    </script>


				

