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
						<li> Banner Image </li>
					</ol>
					<button type="button" id="show" class="btn btn-round btn-primary"> Add New Image <i class="fa fa-plus"></i></button>
				</div>
                
                
             <?php $msg=$this->input->get('m'); 
			if($msg=='success')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> Image has been Inserted Successfully.
                            </div>
		<?php	} ?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='update')
			{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> Banner Image Has been Updated Successfully.
                            </div>
		<?php	} ?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='delete')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Banner Image Has Been Deleted Successfully.
                            </div>
		<?php	} ?>
  
					<section class="panel">
					<div class="position-center" id="hide">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Home_highlight/insert_image"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="i_heading" class="col-lg-2 col-sm-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="i_heading" required id="i_heading" placeholder="Image Heading" autocomplete="off" autofocus>
							
                                </div>
                            </div><br>
							
							<div class="form-group">
												<label for="file" class="col-sm-2 control-label col-lg-2">Image</label>
												<div class="col-lg-10 m-bot15">
													<input type="file" id="file" name="file">
												</div>
							</div>

                            <div class="form-group">
                                <label for="detail" class="col-lg-2 col-sm-2 control-label">Content</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor" id="detail" name="detail" rows="6"></textarea>
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
									<button type="button" id="cancel" class="btn btn-primary"> Cancel </button>
                                </div>
                            </div>
							
							</form>
						</div>
					
                    <div class="panel-body">
					
					
					<div class="adv-table">
                     <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
					<th>S.No.</th>
                        <th>Image</th>
						<th>Heading</th>
                        <th class="hidden-phone">Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php $i=1; foreach($list as $detail){?>
                    <tr>
					<td class="center"><?php echo $i; ?></td>
						<td class="center"><img src="<?php echo base_url()."assets/images/".$detail->image; ?>" width=50 height=50></td>
						<td><?php echo $detail->heading; ?></td>
						<td>
						<div style="width:50%; padding-bottom:5px;">
							<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/home_highlight/edit_image/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit </button>
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want to delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/home_highlight/delete_image/".$detail->id; ?>';">
						<i class="fa fa-times"></i> Delete </button></div>
						</td>
                    </tr>
					<?php $i++; } ?>
					</tbody>
                    </table>

                    </div>

					</div>
				</section>
			</div>
		</div>
	</section>
</section>

<script>
$(document).ready(function(){
        $("#hide").hide();
    $("#show").click(function(){
        $("#hide").show();
    });
	$("#cancel").click(function(){
        $("#hide").hide();
    });
});
</script>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
    <script>

    $( document ).ready(function() {
		$("#register").validate({
			rules: {
				i_heading: "required",
				    file: {
						required: true,
						accept: "jpg,png,jpeg,gif"
					},
					detail:"required"
			},
			
				
			messages: {
				i_heading: "Please enter Image Heading",
				    file: {
						required:"Please select image",
						accept: "only accept jpg,jpeg,png,gif file image"
					},
				detail: "Please fill this field"
			}
			
		});
    }); 
    </script>
<script>
setTimeout(function() {
$('.alert').delay(2000).slideUp('slow');
    });
</script>	


				

