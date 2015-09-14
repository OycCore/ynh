<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Manage Trains </li>
					</ol>
					<button type="button" id="show" class="btn btn-round btn-primary"> Add New Train </button>
				</div>
                
                <section class="panel"> 
				<?php $msg=$this->input->get('m'); 
							if($msg=='success') { ?>
							<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Train Successfully Insert.
                            </div>
						<?php	}   ?>
						<?php $msg=$this->input->get('m'); 
							if($msg=='delete') { ?>
							<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Train Successfully Deleted.
                            </div>
						<?php	}   ?>
			
                    <div class="panel-body">
						
					<div class="position-center" id="hide">
                            <form class="form-horizontal" id="register-form" action="<?php echo base_url()."admin/property/insert_train"; ?>" method="post">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Train Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Train Name" autocomplete="off" autofocus>
                                </div>
                            </div><br>

                            <div class="form-group">
                                <label for="email" class="col-lg-2 col-sm-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea name="detail"  rows="6" cols="50"></textarea>
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
                                </div>
                            </div>
							
							</form>
					</div>
						    <div class="adv-table">
							<table  class="display table table-bordered table-striped" id="dynamic-table">
							<thead>
								<tr>
								<th>S.No.</th>
									<th>NAME</th>
									<th class="hidden-phone">Description</th>
									<th class="hidden-phone">Action</th>
								</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($list as $detail){?>
								
								<tr>
								<td class="center"><?php echo $i; ?></td>
									<td><?php echo $detail->train; ?></td>
									<td><?php if(strlen($detail->description) >15): echo substr($detail->description,0,25).'...';else: echo $detail->description; endif; ?></td>
									<td>
									<?php $role=$this->session->userdata('a_role'); if($role==1){?>
										<div style="width:50%;">
											<button class="btn btn-danger btn-xs btn-block" type="button"
											onclick="if(confirm('Do you want to delete?')) 
											return true,window.location.href='<?php echo base_url()."admin/property/delete_train/".$detail->id; ?>';">
											<i class="fa fa-times"></i> Delete </button>
										</div>
									<?php }else{ ?>
									<?php $uid=$this->session->userdata('u_id'); if($uid==$detail->edit_by){?>
										<div style="width:50%;">
											<button class="btn btn-danger btn-xs btn-block" type="button"
											onclick="if(confirm('Do you want to delete?')) 
											return true,window.location.href='<?php echo base_url()."admin/property/delete_train/".$detail->id; ?>';">
											<i class="fa fa-times"></i> Delete </button>
										</div>
									<?php } } ?>
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
<script>
setTimeout(function() {
$('.alert').delay(2000).slideUp('slow');
    });
</script>

				

