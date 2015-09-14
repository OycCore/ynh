<?php  
$request_url = $_SERVER['REQUEST_URI']; 
 
$request_url_parameter = explode('/',$request_url);
//var_dump($_SERVER); die;
$request_url_admin = "http://".$_SERVER['HTTP_HOST'].$request_url;
?> 
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->          
<div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="<?php  $a_role=$this->session->userdata('a_role'); $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }elseif($a_role==1) { echo $admin_url = base_url()."admin"; }?>" <?php if(!empty($request_url_admin) && $request_url_admin == $admin_url ): ?> class="active" <?php endif; ?>>                    
					<i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
			<?php $a_role=$this->session->userdata('a_role'); $u_role=$this->session->userdata('u_role'); if($a_role==1 OR $u_role==2){?>
            <li class="sub-menu">
                <a href="javascript:;" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property'): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-home"></i>
                    <span>Property</span>
                </a>
                <ul class="sub">
                    <li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && $request_url_parameter[4] == 'add'): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/add"?>"> Add Property</a></li>
                    <li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'view' || $request_url_parameter[4] == 'edit_property' || $request_url_parameter[4] == 'view?m=update' || $request_url_parameter[4] == 'view?m=delete')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/view"?>"> View Property</a></li>
					<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'type' || $request_url_parameter[4] == 'edit_property_type' || $request_url_parameter[4] == 'type?m=update' || $request_url_parameter[4] == 'type?m=delete')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/type"?>"> View Property Type</a></li>
					<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'bus' || $request_url_parameter[4] == 'bus?m=delete')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/bus"?>"> Manage Buses </a></li>
                    <li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'train' || $request_url_parameter[4] == 'train?m=delete')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/train"?>"> Manage Trains </a></li>
					<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'listing_amenities' || $request_url_parameter[4] == 'edit_listing_amenity' || $request_url_parameter[4] == 'listing_amenities?m=update' || $request_url_parameter[4] == 'listing_amenities?m=delete')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/listing_amenities"?>"> Manage Listing Amenities </a></li>
					<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'building_amenities' || $request_url_parameter[4] == 'edit_building_amenity' || $request_url_parameter[4] == 'building_amenities?m=update' || $request_url_parameter[4] == 'building_amenities?m=delete' )): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/building_amenities"?>"> Manage Building Amenities  </a></li>
                    <li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'include_listing' || $request_url_parameter[4] == 'edit_include_listing' || $request_url_parameter[4] == 'include_listing?m=update' || $request_url_parameter[4] == 'include_listing?m=delete')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/include_listing"?>"> Manage Include Listing </a></li>
					<li> <a href="javascript:;" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && ($request_url_parameter[4] == 'xml_format' || $request_url_parameter[4] == 'upload_xml') ): ?> class="active" <?php endif; ?>>
						<span>XML Feeding</span></a>
						<ul class="sub">
							<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && $request_url_parameter[4] == 'xml_format'): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/xml_format"?>"> Sample XML Format </a></li>
							<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property' && $request_url_parameter[4] == 'upload_xml'): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/property/upload_xml"?>"> Upload XML </a></li>
						</ul>
					</li>
					
                </ul>
            </li>
            
			<?php } if($u_role==2){?> 
			<li>
                <a href="<?php echo base_url()."admin/property_boosting"?>" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'property_boosting' || $request_url_parameter[3] == 'checkout_form' || $request_url_parameter[3] == 'payment'): ?> class="active" <?php endif; ?>>
                   <i class="fa fa-indent"></i>
					<span> Make Property Boosting </span>
                </a>
            </li>
			<?php } $type=$this->session->userdata('a_role'); if($type==1){?>
            <li>
                <a href="<?php echo base_url()."admin/view"?>"<?php if(!empty($request_url_parameter[3]) && ($request_url_parameter[3] == 'view' || $request_url_parameter[3] == 'view?m=update' || $request_url_parameter[3] == 'view?m=delete' || $request_url_parameter[3] == 'view?m=status' || ($request_url_parameter[3] == 'agent' && $request_url_parameter[4] == 'edit_agent'))): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-user"></i>
					<span> Agent/User </span>
                </a>
            </li>
			<li>
                <a href="<?php echo base_url()."admin/manage_page"?>" <?php if(!empty($request_url_parameter[3]) && ($request_url_parameter[3] == 'manage_page' || $request_url_parameter[3] == 'manage_page?m=update')): ?> class="active" <?php endif; ?>>
                   <i class="fa fa-copy"></i>
					<span> Manage Pages </span>
                </a>
            </li>
			<li>
                <a href="<?php echo base_url()."admin/manage_boosting"?>" <?php if(!empty($request_url_parameter[3]) && ($request_url_parameter[3] == 'manage_boosting' || $request_url_parameter[3] == 'manage_boosting?m=update' || $request_url_parameter[3] == 'manage_boosting?m=delete')): ?> class="active" <?php endif; ?>>
                   <i class="fa fa-indent"></i>
					<span> Manage Boosting Plan </span>
                </a>
            </li>
			<li class="sub-menu">
                <a href="javascript:;"<?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && ($request_url_parameter[4] == 'image_banner' || $request_url_parameter[4] == 'image_banner?m=update' || $request_url_parameter[4] == 'image_banner?m=delete' || $request_url_parameter[4] == 'video_banner' || $request_url_parameter[4] == 'explore' || $request_url_parameter[4] == 'explore?m=update' || $request_url_parameter[4] == 'explore?m=delete' || $request_url_parameter[4] == 'edit_image' || $request_url_parameter[4] == 'edit_explore' ) ): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-list"></i>
                    <span>Home Highlights</span>
                </a>
                <ul class="sub">
                    <li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && ($request_url_parameter[4] == 'image_banner' || $request_url_parameter[4] == 'image_banner?m=update' || $request_url_parameter[4] == 'image_banner?m=delete' || $request_url_parameter[4] == 'edit_image')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/home_highlight/image_banner"?>"> Image Banner </a></li>
				<!--	<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && $request_url_parameter[4] == 'video_banner'): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/home_highlight/video_banner"?>"> Video Banner </a></li> -->
					<li <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && ($request_url_parameter[4] == 'explore' || $request_url_parameter[4] == 'explore?m=update' || $request_url_parameter[4] == 'explore?m=delete' ||  $request_url_parameter[4] == 'edit_explore')): ?> class="active" <?php endif; ?>><a href="<?php echo base_url()."admin/home_highlight/explore"?>"> Explore Neighborhoods </a></li> 
				</ul>
            </li>
			<li>
                <a href="<?php echo base_url()."admin/agent/manage_interest"?>" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'agent' && ($request_url_parameter[4] == 'manage_interest' || $request_url_parameter[4] == 'manage_interest?m=update' || $request_url_parameter[4] == 'manage_interest?m=delete')): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-file-text"></i>
					<span>Manage Interest</span>
                </a>
            </li>
			<!--<li>
                <a href="<?php echo base_url()."admin/home_highlight/services"?>" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && $request_url_parameter[4] == 'services'): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-file-text"></i>

					<span> Our Services </span>
                </a>
            </li>
			<li>
                <a href="<?php echo base_url()."admin/home_highlight/ynh_feature"?>" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && $request_url_parameter[4] == 'ynh_feature'): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-file-text"></i>

					<span> YNH Features </span>
                </a>
            </li>
			<li>
                <a href="<?php echo base_url()."admin/home_highlight/manage_client"?>" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'home_highlight' && $request_url_parameter[4] == 'manage_client'): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-users"></i>
					<span> Manage Clients </span>
                </a>
            </li> -->
			<li>
                <a href="<?php echo base_url()."admin/site_setting/update"?>" <?php if(!empty($request_url_parameter[3]) && $request_url_parameter[3] == 'site_setting' && ($request_url_parameter[4] == 'update' || $request_url_parameter[4] == 'update?m=success')): ?> class="active" <?php endif; ?>>
                    <i class="fa fa-cogs"></i>
					<span> Site Setting </span>
                </a>
            </li>
			
            <?php } ?>
            
        </ul>
</div>        
<!-- sidebar menu end-->
    </div>
</aside>