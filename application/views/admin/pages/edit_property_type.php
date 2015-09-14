<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Edit Property Type </li>
					</ol>
				</div>
                
                <section class="panel"> 
				
                    <div class="panel-body">
					<?php foreach($list as $detail) {?>	
					<div class="position-center" id="hide">
                            <form class="form-horizontal" id="register-form" action="<?php echo base_url()."admin/property/update_property_type"; ?>" method="post">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label"> Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" required value="<?php echo $detail->type; ?>">
									<input type="hidden" class="form-control" name="id" value="<?php echo $detail->id; ?>">
                                </div>
                            </div><br>

                            <div class="form-group">
                                <label for="email" class="col-lg-2 col-sm-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea name="detail"  rows="6" cols="50"><?php echo $detail->content; ?></textarea>
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary submit"> Update </button>
									
                                </div>
                            </div>
							
							</form>
					</div>
					<?php } ?>	   

					</div>
				</section>
			</div>
		</div>
	</section>
</section>

				

