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
						<li> Video Banner </li>
					</ol>
					<button type="button" id="show" class="btn btn-round btn-primary"> Add New Video <i class="fa fa-plus"></i> </button>
				</div>
                  <?php $msg=$this->input->get('m'); 
			if($msg=='success')	{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Video Has been Inserted Successfully.
                </div>
		<?php	}	?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='update')	{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Video Has been Updated Successfully.
                </div>
		<?php	}	?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='delete')	{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Video Has been Deleted Successfully.
                </div>
		<?php	}	?>
                <section class="panel">
                                    

					<div class="position-center" id="hide">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Home_highlight/insert_video"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="v_heading" required id="name" placeholder="Video Heading" autocomplete="off" autofocus>
				
								</div>
                            </div><br>
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Url</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="url" placeholder="Video Url" autocomplete="off">
				
								</div>
                            </div><br>

                            <div class="form-group">
                                <label for="detail" class="col-lg-2 col-sm-2 control-label">Content</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor" id="detail" name="detail" rows="6"></textarea>
                                </div>
                            </div><br>
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
                                </div>
                            </div>
							
							</form>
						</div>

					
                    <div class="panel-body">
					<div class="adv-table">
						<table  class="display table table-bordered table-striped" id="dynamic-table">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Video</th>
									<th>Heading</th>
									<th class="hidden-phone">ACTION</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($list as $detail){?>
                    <tr>
					<td class="center"><?php echo $i; ?></td>
						<td class="center"><iframe width="100" height="100" src="<?php echo $detail->url; ?>"></iframe></td>
						<td><?php echo $detail->heading; ?></td>
						<td>
						<div class="col-sm-4" style=" padding:5px 0px;">
							<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/Home_highlight/edit_video/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit </button>
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want to delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/Home_highlight/delete_video/".$detail->id; ?>';">
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
});
</script>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
    <script>

     $( document ).ready(function() {
		$("#register").validate({
			rules: {
				v_heading: "required",
				    url: {
						required: true
					},
					detail: {
					required: true
				}
			},
			
				
			messages: {
				v_heading: "Please enter Heading",
					 url: {
						required:"Please Enter Video Url"
					},
				detail: "Please fill this field"
			}
			
		});
    }); 
   
    </script>


				

