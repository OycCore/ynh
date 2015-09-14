<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Manage YNH Feature </li>
					</ol>
					<button type="button" id="show" class="btn btn-round btn-primary" onclick="window.location.href='<?php echo base_url()."admin/Home_highlight/add_ynhfeature" ?>'"> Add New <i class="fa fa-plus"></i> </button>
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
		<section class="panel">
						
			<div class="panel-body">		
				<div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
					<th>S.No.</th>
						<th>Name</th>
                        <th>Image</th>
                        
                        <th class="hidden-phone">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php $i=1; foreach($list as $detail){?>
                    <tr>
					<td class="center"><?php echo $i; ?></td>
						<td><?php echo $detail->name; ?></td>
						<td class="center"><img src="<?php echo base_url()."assets/images/".$detail->image; ?>" width="60" height="60"></td>
						
						<td>
						<div class="col-sm-4" style=" padding:5px 0px;">
							<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/Home_highlight/edit_ynhfeature/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit </button>
							<button class="btn btn-danger btn-xs btn-block" type="button"
							onclick="if(confirm('Do you want to delete?')) 
							return true,window.location.href='<?php echo base_url()."admin/Home_highlight/delete_ynhfeature/".$detail->id; ?>';">
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

