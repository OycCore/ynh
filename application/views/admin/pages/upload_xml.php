<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<section id="main-content">
        <section class="wrapper">
        <!-- page start-->
	
        
        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> Upload XMl File </li>
					</ol>
			</div>
			<?php $msg=$this->input->get('m'); 
			if($msg=='success')
			{ ?>
				<div class="alert alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>Success!</strong> Your XML Data successfully inserted.
                            </div>
		<?php	}   ?>
                <section class="panel">  
                    
					<div class="panel-body">
                    
							
							<form action="<?php echo base_url().'admin/property/xml_insert'?>" id="register" method="post" enctype="multipart/form-data">
								<h3 class="lead">Select XML File to upload:</h3>
									<input type="file" name="xml_file" id="fileToUpload">
											<button class="btn btn-primary start" type="submit" style="margin-top:5px;">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Start upload</span>
											</button>

							</form>
							
						 </div>
					<span style="font-size:20px;"> More Details:- </span>
										<button class="btn btn-warning start" style="margin-top:5px;" onclick="location.href='<?php echo base_url() ?>assets/help.docx'">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Help File</span>
											</button>
                </section>
			</div>
		</div>
	</section>
</section>
<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
    <script>
    $( document ).ready(function() {
		$("#register").validate({
			rules: {
				    xml_file: {
						required: true,
						accept: "xml"
					}
			},
			
				
			messages: {
				xml_file: {
						required:"Please Select File",
						accept: "only accept Xml file"
					}
			}
			
		});
    }); 
   
    </script>


				

