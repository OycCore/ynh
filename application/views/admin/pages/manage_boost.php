<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Manage Boosting Plan </li>
					</ol>
					<button type="button" id="show" class="btn btn-round btn-primary"> Add New Plan </button>
				</div>
                
                <section class="panel"> 
				<?php $msg=$this->input->get('m'); 
							if($msg=='success') { ?>
							<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> New Plan has been Successfully Insert.
                            </div>
						<?php	}   ?>
						<?php $msg=$this->input->get('m'); 
							if($msg=='update') { ?>
							<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Boosting Plan has been Successfully Update.
                            </div>
						<?php	}   ?>
						<?php $msg=$this->input->get('m'); 
							if($msg=='delete') { ?>
							<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Boosting Plan has been Successfully Deleted.
                            </div>
						<?php	}   ?>
			
                    <div class="panel-body">
						
					<div class="position-center" id="hide" style="display:none;">
                            <form class="form-horizontal" id="register-form" action="<?php echo base_url()."admin/site_setting/insert_plan"; ?>" method="post">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Plan Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" required />
                                </div>
                            </div><br>

							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label"> Price </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="price" required />
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label"> Days </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="days" required />
                                </div>
                            </div><br>
                        
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
									<button type="button" id="cancel_add" class="btn btn-primary"> Cancel </button>
                                </div>
                            </div>
							
							</form>
					</div>
					<div class="position-center" id="edit_form" style="display:none;">
                            <form class="form-horizontal" id="register-form" action="<?php echo base_url()."admin/site_setting/update_plan"; ?>" method="post">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Plan Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="plan" name="name" required >
									<input type="hidden" class="form-control" id="hidden_id" name="plan_id" value="">
								</div>
                            </div><br>

							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label"> Price </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="plan_price" name="price" required >
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label"> Days </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="plan_days" name="days" required >
                                </div>
                            </div><br>
                        
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success update"> Update </button>
									<button type="button" id="cancel_edit" class="btn btn-primary"> Cancel </button>
                                </div>
                            </div>
							
							</form>
					</div>
						    <div class="adv-table">
							<table  class="display table table-bordered table-striped" id="dynamic-table">
							<thead>
								<tr>
								<th>S.No.</th>
									<th>Name</th>
									<th>Price</th>
									<th>Days</th>
									<th class="hidden-phone">Action</th>
								</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($list as $detail){?>
								
								<tr>
								<td class="center"><?php echo $i; ?></td>
									<td><?php echo $detail->name; ?></td>
									<td><?php echo $detail->price; ?>$</td>
									<td><?php echo $detail->days; ?> days</td>
									<td>
									<?php $role=$this->session->userdata('a_role'); if($role==1){?>
									<div style="width:50%; padding-bottom:5px;">
									<input type="hidden" name="edit_id" value="<?php echo base64_encode($detail->id); ?>" />
							<button class="btn btn-success btn-xs btn-block edit" type="button"><i class="fa fa-pencil"></i> Edit </button></div>
										<div style="width:50%;">
											<button class="btn btn-danger btn-xs btn-block" type="button"
											onclick="if(confirm('Do you want to delete?')) 
											return true,window.location.href='<?php echo base_url()."admin/site_setting/plan_delete/".$detail->id; ?>';">
											<i class="fa fa-times"></i> Delete </button>
										</div>
									<?php } ?>
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
        $("#hide").slideDown()();
    });
	$("#cancel_edit").click(function(){
        $("#edit_form").slideUp();
    });
	$("#cancel_add").click(function(){
        $("#hide").slideUp();
    });
});

$(document).ready(function(){
										$('.edit').click(function(){
											$("#edit_form").slideDown();
												var id = $(this).prev().val();
												$.ajax({
												type:"POST",
												dataType:"json",
												url:"<?php echo base_url()."admin/site_setting/boosting_byid";?>",
												data: {'edit_id': id},
												success: function (response) {
												$('#plan').val(response.name);
												$('#plan_price').val(response.price);
												$('#plan_days').val(response.days);
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

				

