<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Manage Interest </li>
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
                                <strong>Success !!</strong> Insertion Successfully.
                            </div>
		<?php	} ?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='update')
			{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> Updated Successfully.
                            </div>
		<?php	} ?>
		 <?php $msg=$this->input->get('m'); 
			if($msg=='delete')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong>Deleted Successfully.
                            </div>
		<?php	} ?>
		<section class="panel">
						<div class="position-center" id="hide" style="display:none;">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/agent/insert_interest"; ?>" method="post">
							<div class="form-group">
                                <label for="agent_interest" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="interest" required id="agent_interest" placeholder="Agent Interest" autocomplete="off" autofocus>
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
						
						<div class="position-center" id="edit_form" style="display:none;">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/agent/update_interest"; ?>" method="post">
							<div class="form-group">
                                <label for="agent_interest" class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="a_interest" name="interest" value="">
									<input type="hidden" class="form-control" id="hidden_id" name="interest_id" value="">
                                </div>
                            </div><br>
	
	
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Update </button>
									<button type="button" id="cancel_edit" class="btn btn-primary"> Cancel </button>
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
                        <th>Name</th>
                        <th class="hidden-phone">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php $i=1; foreach($list as $detail){?>
                    <tr>
					<td class="center"><?php echo $i; ?></td>		
						<td><?php echo $detail->name; ?></td>
						<td>
						<div class="col-sm-4" style=" padding:5px 0px;">
							<input type="hidden" name="edit_id" value="<?php echo base64_encode($detail->id); ?>" />
							<button class="btn btn-success btn-xs btn-block edit" type="button" ><i class="fa fa-pencil"></i> Edit </button>
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want to delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/Agent/delete_interest/".$detail->id; ?>';">
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
    $("#show").click(function(){
        $("#hide").slideDown();
    });
	$("#cancel").click(function(){
        $("#hide").slideUp();
    });
	$("#cancel_edit").click(function(){
        $("#edit_form").slideUp();
    });
	
});
</script>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
<script>

    $( document ).ready(function() {
		$("#register").validate({
			rules: {
				interest: "required"
			},
			
				
			messages: {
				interest: "Please Fill Up This field"
			}
			
		});
    }); 
    </script>
<script>
				$(document).ready(function(){
										$('.edit').click(function(){
											$("#edit_form").slideDown();
												var id = $(this).prev().val();
												$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Agent/interest_byid";?>",
												data: {'edit_id': id},
												success: function (response) {
												$('#a_interest').val(response);
												$('#hidden_id').val(id);
												}
												});
												return false;
												});	
												
												});
																			
</script>
<script>
setTimeout(function() {
$('.alert').delay(2000).slideUp('slow');
    });
</script>				

