<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <?php $detail=$this->Site_setting_model->site_detail(); foreach($detail as $logo){ ?>
	<link rel="icon" href="<?php echo base_url()."assets/images/".$logo->site_favicon; ?>" type="image/x-icon">
	<?php } ?>

    <title>Your Neighborhood Admin</title>

    <!--Core CSS -->
    <link href="<?php echo base_url() ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" />
	<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	
	
	  <link href="<?php echo base_url() ?>assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/data-tables/DT_bootstrap.css" />

    <!-- file upload -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/file-uploader/css/jquery.fileupload.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/file-uploader/css/jquery.fileupload-ui.css">
	
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<!--Core js-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<?php error_reporting(0); ?>
<div class="brand">
<?php $detail=$this->Site_setting_model->site_detail(); foreach($detail as $logo){?>
    <a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>" class="logo">
        <img src="<?php echo base_url()."assets/images/".$logo->site_logo; ?>" alt="" width="250" height="60">
    </a>
	<?php } ?>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
			<?php $aid=$this->session->userdata('a_id'); $uid=$this->session->userdata('u_id'); if(!empty($aid)){ $id=$this->session->userdata('a_id'); }
			elseif(!empty($uid)){ $id=$this->session->userdata('u_id'); }$this->load->model('Admin_model'); $result=$this->Admin_model->agent_image($id);  
			foreach($result as $image){$img=$image->image; if($img!=null){ ?>
			<img alt="" src="<?php echo base_url()."assets/agent_images/".$image->image; ?>" > <?php }else{?>
			<img alt="" src="<?php echo base_url() ?>assets/images/avatar1_small.jpg"><?php } }?>
                <span class="username"><?php if(!empty($aid)){ $name=$this->session->userdata('a_name'); echo $name; }elseif(!empty($uid)){ $name=$this->session->userdata('u_name'); echo $name; } ?> | As :- 
				 <?php $role=$this->session->userdata('a_role'); $role=$this->session->userdata('u_role'); if($role==1){ echo "Administrator"; } elseif($role==2){ echo "Agent";}elseif($role==3){ echo "User";}?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo base_url()."admin/agent/profile"?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo base_url()."admin/login/logout"?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        
    </ul>
    <!--search & user info end-->
</div>
</header>
</section>