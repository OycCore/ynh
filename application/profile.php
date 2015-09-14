<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo base_url()."admin"?>"> Dashboard </a></li>
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
					<?php foreach($list as $detail) {?>
					<img alt="" src="<?php echo base_url() ?>assets/images/avatar1_small.jpg" width="200" height="200"> <br>
					<h2><i class="fa fa-user"></i> <?php echo $detail->name; ?></h2>
					<i class="fa fa-envelope"></i> <i><?php echo $detail->email; ?></i><br><br>
				<!--	<div class="col-sm-3">
					<button class="btn btn-success btn-xs btn-block" onclick="window.location.href='<?php echo base_url()."admin/agent/edit_profile/".$detail->id; ?>'" type="button"><i class="fa fa-pencil"></i> Edit Profile </button>
					</div> -->
					<?php } ?>
					</div>
					</div>
				</section>
			</div>
		</div>
	</section>
</section>



				

