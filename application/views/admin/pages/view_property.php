<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> View Property </li>
					</ol>
					<button type="button" onclick="location.href='<?php echo base_url()."admin/property/add"?>'" class="btn btn-round btn-primary"> Add Property <i class="fa fa-plus"></i> </button>
				</div>
				
			<?php $msg=$this->input->get('m'); 
			if($msg=='success')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Property has successfully insert.
                            </div>
		<?php	}
			?>
			<?php $msg=$this->input->get('m'); 
			if($msg=='update')
			{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Property has successfully update.
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
                                <strong>Success!</strong> Property has successfully delete.
                            </div>
		<?php	}
			?>

                <section class="panel">
                    
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
						<th>S.No.</th>
                        <th>Image</th>
                        <th>Name</th>
						<th>Edit By</th>
						<th>Type</th>
                        <th class="">Action</th>
                    </tr>
                    </thead>
                    <tbody>
										<?php $i=1; foreach($list as $detail) : ?>
                    <tr>
						<td class="center"><?php echo $i; ?></td>
                        <td class="center"><img src="<?php echo base_url()."assets/property_images/".$detail->feature_image; ?>" width=50 height=50></td>
                        <td><?php echo $detail->property; ?></td>
						<td><?php $eid=$detail->edit_by; $edit_detail=$this->Admin_model->admin_detailbyid($eid); foreach($edit_detail as $edit_){ echo $edit_->name; }?></td>
						<td><?php $type=$detail->purpose; if($type==1){ echo "Sales"; }if($type==2){ echo "Rental"; } ?></td>
                        <td class="center">
						<div style="width:50%; padding-bottom:5px;">
							<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/property/edit_property/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit </button></div>
						<div style="width:50%;">
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want to delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/property/delete_property/".$detail->id; ?>';">
						<i class="fa fa-times"></i> Delete </button></div>
						</td>
						
                    </tr>
					
					<?php $i++; endforeach; ?>
                    </tbody>
                    <!--<tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
						<th>Type</th>
                        <th class="hidden-phone">ACTION</th>
                    </tr>
                    </tfoot> -->
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

				

