<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Manage Pages </li>
					</ol>
					<!-- <button type="button" id="show" class="btn btn-round btn-primary" onclick="window.location.href='<?php echo base_url()."admin/manage_page/add_page" ?>'"> New Page <i class="fa fa-plus"></i> </button> --> 
				</div>
                <?php $msg=$this->input->get('m'); if($msg=='success'){ ?>
							<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> New Page has been Inserted Successfully.
                            </div>
						<?php	} ?>
						<?php $msg=$this->input->get('m'); if($msg=='update'){ ?>
							<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success !!</strong> Page Has been Updated Successfully.
                            </div>
						<?php	} ?>
                <section class="panel">
                    
					<div class="panel-body">		
						<div class="adv-table">
							<table  class="display table table-bordered table-striped" id="dynamic-table">
								<thead>
									<tr>
									<th>S.No.</th>
										<th>Page Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($list as $detail){?>
									<tr>
									<td class="center"><?php echo $i; ?></td>
										<td><?php echo $detail->page_name; ?></td>
										<td>
											<div style="width:50%; padding-bottom:5px;">
												<button class="btn btn-success btn-xs btn-block" 
												onclick="window.location.href='<?php echo base_url()."admin/manage_page/edit/".base64_encode($detail->id); ?>'"
												type="button"><i class="fa fa-pencil"></i> Edit </button>
											</div>
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
setTimeout(function() {
$('.alert').delay(2000).slideUp('slow');
    });
</script>
