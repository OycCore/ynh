<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."admin"; ?>"> Dashboard </a></li>
						<li> Add New Page </li>
					</ol>
				</div>
                
                <section class="panel">
                    <div class="panel-body">
					
						<div class="position-center">
                            <form class="form-horizontal" id="register" action="<?php echo base_url()."admin/Manage_page/insert_page"; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name" class="col-lg-2 col-sm-2 control-label">Page Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" id="name" required autocomplete="off" autofocus>
                                </div>
                            </div><br>
							<div class="form-group">
                                <label for="title" class="col-lg-2 col-sm-2 control-label">Page Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="title" id="title" required autocomplete="off" autofocus>
                                </div>
                            </div><br>
							<div class="form-group">
                                <label for="m_title" class="col-lg-2 col-sm-2 control-label">Meta Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="m_title" id="m_title" autocomplete="off">
                                </div>
                            </div><br>
							<div class="form-group">
                                <label for="m_keyword" class="col-lg-2 col-sm-2 control-label">Meta Keyword</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="m_keyword" id="m_keyword" autocomplete="off" >
                                </div>
                            </div><br>
							<div class="form-group">
                                <label for="m_description" class="col-lg-2 col-sm-2 control-label">Meta Description</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="m_description" cols="5" rows="5"></textarea>
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <label for="content" class="col-lg-2 col-sm-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <textarea class="ckeditor" id="content" name="content" rows="6"></textarea>
                                </div>
                            </div><br>
							
							<div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success submit"> Submit </button>
									
                                </div>
                            </div>
							
							</form>
						</div>
					
					
					</div>
				</section>
			</div>
		</div>
	</section>
</section>

<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
<script>

    $(document).ready(function() {	
		
		$("#register").validate({
			rules: {
				title: "required",
				m_title: "required",
				m_keyword: "required",
					m_description:"required"
			},
			
				
			messages: {
				title: "Please Enter Page Title",
				m_title: "Please Enter Meta Title",
				m_keyword: "Please Enter Meta Keyword",
				m_description: "Please fill this field"
			}
			
		});
    }); 
	
    </script>

				

