<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> View Profile </li>
					</ol>
				</div>
			
			<?php $msg=$this->input->get('m'); 
			if($msg=='update')
			{ ?>
				<div class="alert alert-info fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> You have successfully updated.
                            </div>
		<?php	}
			?>
                <section class="panel">
                    <header class="panel-heading">
                        <h3 style="color:#103355; text-align:center;"><i>View Profile</i></h3>
                    </header>
                    <div class="panel-body">
					<div class="col-sm-8">
					<?php foreach($list as $detail) {
					$img=$detail->image; if($img!=null){ ?>
			<img alt="" src="<?php echo base_url()."assets/agent_images/".$detail->image; ?>" style="border:1px solid #666; border-radius: 50%; height: 250px; width: 250px;"> <?php }else{?>
					<img alt="" src="<?php echo base_url() ?>assets/images/avatar1_small.jpg" width="200" height="200"> <br>
			<?php } ?>
					<h2><i class="fa fa-user"></i> <?php echo $detail->name; ?></h2>
					<i class="fa fa-envelope"></i> <i><?php echo $detail->email; ?></i><br><br>
					<div class="col-sm-3">
					<button class="btn btn-primary btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/agent/edit_profile/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-pencil"></i> Edit Profile </button>
					</div>
					<div class="col-sm-3">
					<button class="btn btn-warning btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/agent/change_password/".base64_encode($detail->id); ?>'" type="button"><i class="fa fa-lock"></i> Change Password </button>
					</div> 
					<?php } ?>
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
