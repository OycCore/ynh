<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Manage Clients </li>
					</ol>
					<button type="button" id="show" class="btn btn-round btn-primary"> Add New <i class="fa fa-plus"></i> </button>
				</div>
               
					 <?php $msg=$this->input->get('m'); 
			if($msg=='success')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Feature has been Inserted Successfully.
                            </div>
		<?php	} ?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='update')
			{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Feature Has been Updated Successfully.
                            </div>
		<?php	} ?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='delete')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Feature Has Been Deleted Successfully.
                            </div>
		<?php	} ?>
						<div class="position-center" id="hide">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Home_highlight/insert_feature"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" required id="name" placeholder="Name" autocomplete="off" autofocus>
                                </div>
                            </div><br>
							
							<div class="form-group">
												<label for="file" class="col-sm-2 control-label col-lg-2">Image</label>
												<div class="col-lg-10 m-bot15">
													<input type="file" id="file" name="file">
												</div>
							</div>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
									<button type="button" id="cancel" class="btn btn-primary"> Cancel </button>
                                </div>
                            </div>
							
							</form>
						</div>
					 
                <section class="panel">
                    <div class="panel-body">
					
					
					
						<div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
					<th>S.No.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th class="hidden-phone">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
					
						<?php $i=1; foreach($list as $detail){?>
                    <tr>
					<td class="center"><?php echo $i; ?></td>
					<td><?php echo $detail->name; ?></td>
						<td class="center"><img src="<?php echo base_url()."assets/images/".$detail->image; ?>" width="80" height="60"></td>
						<td>
						<div class="col-sm-4" style=" padding:5px 0px;">
							<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/Home_highlight/edit_client/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit </button>
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want to delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/Home_highlight/delete_client/".$detail->id; ?>';">
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
				name: "required",
				    file: {
						required: true,
						accept: "jpg,png,jpeg,gif"
					}
				},
			
			messages: {
				name: "Please Enter Name",
				    file: {
						required:"Please select image",
						accept: "only accept jpg,jpeg,png,gif file image"
					}
			}
			
		});
    }); 
    </script>

				

