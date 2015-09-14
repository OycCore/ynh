<section id="main-content">
        <section class="wrapper">
        <!-- page start-->
	
        
        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> View Agent List </li>
					</ol>
					<button type="button" onclick="location.href='<?php echo base_url()."admin/agent/add"?>'" class="btn btn-round btn-primary"> Add New Agent <i class="fa fa-plus"></i> </button>
				</div>
			<?php $msg=$this->input->get('m'); 
			if($msg=='success')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> You have successfully inserted.
                            </div>
		<?php	}   ?>
			<?php $msg=$this->input->get('m'); 
			if($msg=='update')
			{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> You have successfully updated.
                            </div>
		<?php	}
			?>
			<?php $msg=$this->input->get('m'); 
			if($msg=='delete')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> You have successfully deleted.
                            </div>
		<?php	}
			?>
						<?php $msg=$this->input->get('m'); 
			if($msg=='status')
			{ ?>
				<div class="alert alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> Status have changed successfully...
                            </div>
		<?php	}	?>
                <section class="panel">  
                    
                <div class="panel-body">
                    <div class="adv-table">
                     <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
					<th>S.No.</th>
                        <th>Name</th>
                        <th class="hidden-phone">Email</th>
						<th class="hidden-phone">Admin-Type</th>
                        <th class="hidden-phone">Status</th>
                        <th class="hidden-phone">Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php $i=1; foreach($list as $detail){?>
					<?php $admin=$detail->admin_type; if($admin!=1){?>
                    <tr>
					<td class="center"><?php echo $i; ?></td>
                        <td><?php echo $detail->name; ?></td>
                        <td><?php echo $detail->email; ?></td>
						<?php $v=$detail->admin_type; if($v==3){?>
                        <td class="hidden-phone">User</td>
						<?php }if($v==2){  ?>
						<td class="hidden-phone">Agent</td>
						<?php } ?>
						<?php $v=$detail->status; if($v==1){?>
                        <td class="hidden-phone"><span class="label label-info"> Active </span></td>
						<?php }else{  ?>
						<td class="hidden-phone">
						<span class="label label-inverse"> Inactive </span></td>
						<?php } ?>	
						
                        <td class="center hidden-phone">
						<div style="width:50%; padding-bottom:5px;">
							<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/agent/edit_agent/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit </button></div>
						<div style="width:50%; padding-bottom:5px;">
						<form class="form-horizontal" method="post" action="<?php echo base_url()."admin/agent/update_status" ;?>" >
										<input type="hidden" name="active" value="<?php echo $detail->status;?>"/>
										<input type="hidden" name="id" value="<?php echo $detail->id  ;?>"/>
										<input type="hidden" name="action" value="update"/>
						<?php if($detail->status==1){?>
							<button class="btn btn-warning btn-xs btn-block" onclick="return Confirm()" ><i class="fa fa-eye"></i> Inactive </button>
						<?php }else{?>
							<button class="btn btn-info btn-xs btn-block" onclick="return Confirm()" ><i class="fa fa-eye"></i> Active </button>
						<?php } ?>										</form>
						<script>
						function Confirm()
								{
								  var x = confirm("Are you sure you want to changed?");
								  if (x)
									  return true;
								  else
									return false;
								}
						</script>
						</div>
						<div style="width:50%;">
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/agent/delete_agent/".$detail->id; ?>';">
						<i class="fa fa-times"></i> Delete </button></div>
						</td>
						
                    </tr>
					
					<?php $i++; }  }?>
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
setTimeout(function() {
$('.alert').delay(2000).slideUp('slow');
    });
</script>


				

