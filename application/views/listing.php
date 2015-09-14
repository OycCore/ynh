<?php  
$request_url = $_SERVER['REQUEST_URI']; 
$request_url_admin = "http://".$_SERVER['HTTP_HOST'].$request_url;
$until = substr($request_url_admin, 0, strrpos($request_url_admin, "&"));

?>
<?php 
if (isset($_SESSION['MESSAGE'])): 
if ($_SESSION['MESSAGE'] === 'contact_success'): ?>
	<script>
            bootbox.alert("Message has been Send Successfully!", function() {
                console.log("Alert Callback");
            });
    </script>	
<?php endif; unset($_SESSION['MESSAGE']);	endif;?>
<?php $all_property_id=array();
 foreach($detail as $getid){
	$all_property_id[]=$getid->id;
}
 ?>
<?php
 $ar = array();
for($i = 0; $i< sizeof($detail); $i++){
	$ar[$i][] = $detail[$i]->full_address;
	$ar[$i][] = $detail[$i]->lat;
	$ar[$i][] = $detail[$i]->log;	
}	 
	$arr = json_encode($ar);	
 ?>
<section id="main">
<div class="wrapper">
<div class="top_cont">
<span>SEARCH RESULTS: </span>

<small><?php if(!empty($_GET['location'])){ $location=$_GET['location']; foreach($location as $value){echo $value.","; } }?>
 <?php if(!empty($_GET['type']) && $_GET['type']!=="all"){ $this->load->model('Admin_model'); $r=$this->Admin_model->property_type_byid($_GET['type']); foreach($r as $d){ echo $d->type."Type,"; } }?>
 <?php if(!empty($_GET['price1']) && $_GET['price1']!=="max" && $_GET['price2']!=="max"){ echo "Between $".$_GET['price1']." to $".$_GET['price2']; }?>
 <?php if(!empty($_GET['beds']) && $_GET['beds']!=="max"){ echo $_GET['beds']." Beds,"; }?>
 <?php if(!empty($_GET['baths']) && $_GET['baths']!=="max"){ echo $_GET['baths']." Baths,"; }?>
 <?php if(!empty($_GET['sq_ft']) && $_GET['sq_ft']!=="max"){ echo "Atleast ".$_GET['sq_ft']." SquareFt,"; }?>
 <?php if(!empty($_GET['include']) && $_GET['include']!=="all"){ $this->load->model('Admin_model'); $i_list=$this->Admin_model->include_listing_byid($_GET['include']); foreach($i_list as $ilist){ echo $ilist->name." Listing,"; } }?>
 <?php if(!empty($_GET['sale'])){ $sale=$_GET['sale']; if($sale==1){ echo "Sales Properties,"; }if($sale==2){ echo "Rental Properties,"; }  }?>
 <?php if(!empty($_GET['ptype'])){ $ptype=$_GET['ptype']; foreach($ptype as $ptype1){ $this->load->model('Admin_model'); $ptype2=$this->Admin_model->property_type_byid($ptype1); foreach($ptype2 as $ptype3){ echo $ptype3->type."-"; } } echo " Type,";  }?>
 <?php if(!empty($_GET['listing'])){ $listing=$_GET['listing']; foreach($listing as $value1){ $this->load->model('Admin_model'); $value2=$this->Admin_model->listing_amenities_byid($value1); foreach($value2 as $value3){ echo $value3->name."-"; } }echo " Amenity,";   }?>
 <?php if(!empty($_GET['building'])){ $building=$_GET['building']; foreach($building as $val1){ $this->load->model('Admin_model'); $val2=$this->Admin_model->building_amenities_byid($val1); foreach($val2 as $val3){ echo $val3->name."-"; } } echo " Amenity,";  }?>
<span>| <?php $c=count($detail); echo $c." Results Found"; ?> </span></small>
<ul>
<li><a href="#" <?php $u_id=$this->session->userdata('u_id'); if(!empty($u_id)){?> id="down" <?php }else{ ?> onClick="alert('You are not login!'); return false; " <?php } ?> >MY HOMES<span><?php echo count($myhome); ?></span></a> 
	<ul class="drp1">
	<?php foreach($myhome as $homelist){?>
    <li class="droplist"><a href="#"><?php $pt_id=$homelist->property_id; $s_prty=$this->Fronted_model->property_detail_byid($pt_id); foreach($s_prty as $prty){echo $prty->property;}?></a></li>
	<?php } ?>
	</ul>
</li>

<li><a href="#" <?php if(!empty($u_id)){ ?> class="searching" <?php }else{ ?> onClick="alert('You are not login!'); return false; " <?php } ?> >MY SEARCHES<span><?php echo count($mysearch); ?></span></a>
</li>
</ul>
</div>

<div class="left_sec">

<div class="ad_block">
<span>Ad Space</span>
</div>
<div class="refine_search">
<h3>REFINE SEARCH: </h3>
<form action="<?php echo base_url()."home/filter"; ?>" id="my_form" method="get" >
<div class="search-location2">
<ul>
<li>
			<select data-placeholder="SELECT LOCATION" name="location[]" style="width:100%;" multiple class="chosen-select" tabindex="8">
		   <?php foreach($loc as $location){ $location_val = $location->location; ?>
			<option value="<?php if(!empty($location_val)): echo $location_val; endif; ?>"><?php echo $location->location; ?></option>
            <?php } ?>
          </select>
       </li>
<li><span class="custom-select">
        <select name="type">
          <option value="all">TYPE</option>
		  <?php foreach($list3 as $type){?>
          <option value="<?php echo $type->id; ?>"><?php echo $type->type; ?></option>
          <?php } ?>
        </select>
        </span></li>   
<li><span class="custom-select">
        <select name="price1">
          <option value="max">MIN PRICE</option>
          <option value="100000">$100,000</option>
          <option value="200000">$200,000</option>
		  <option value="300000">$300,000</option>
		  <option value="400000">$400,000</option>
		  <option value="500000">$500,000</option>
        </select>
        </span></li> 
<li><span class="custom-select">
        <select name="price2">
          <option value="max">MAX PRICE</option>
          <option value="200000">$200,000</option>
          <option value="300000">$300,000</option>
		  <option value="400000">$400,000</option>
		  <option value="500000">$500,000</option>
		  <option value="600000">$600,000</option>
        </select>
        </span></li> 		
 <li><span class="custom-select">
        <select name="beds">
<option value="max">BEDS:</option>
<option value="1">1 Bedroom</option>
<option value="2">2 Bedrooms</option>
<option value="3">3 Bedrooms</option>
<option value="4">4 Bedrooms</option>
        </select>
        </span></li> 
 <li><span class="custom-select">
        <select name="baths">
<option value="max">BATHS:</option>
<option value="1">1 Bathroom</option>
<option value="2">2 Bathrooms</option>
<option value="3">3 Bathrooms</option>
<option value="4">4 Or More</option>
        </select>
        </span></li> 
 <li><span class="custom-select">
        <select name="sq_ft">
<option value="max">SQUARE FEET</option>
<option value="500"> 500+ </option>
<option value="1000"> 1000+ </option>
<option value="1500"> 1500+ </option>
<option value="2000"> 2000+ </option>
<option value="2500"> 2500+ </option>
<option value="3000"> 3000+ </option>
<option value="3500"> 3500+ </option>
<option value="4000"> 4000+ </option>
        </select>
        </span></li>      
<li><a href="javascript:{}" onclick="document.getElementById('my_form').submit(); return false;" class="search-buttan"><i class="fa fa-search" ></i>SEARCH</a></li>		
<li class="list-box1" id="lbxf-btn"><span class="search-buttan2" onclick="initialize()"><i class="fa fa-plus"></i>ALL FILTERS</span></li>
</ul>
</div>
</form>

<div class="overly" id="overlay"></div>
<form action="<?php echo base_url()."home/advanced_search"; ?>" id="my_form2" method="get" >
<div class="advanced-options" id="lbxf-advanced-options">
<div class="advanced-top"><strong><i class="fa fa-plus"></i>ADVANCED OPTIONS</strong><span id="close"><a href=""><i class="fa fa-times"></i>CLOSE</a></span></div>
<div class="refine_search2">
<ul>

<li><span class="custom-select">
<select name="sq_ft">
<option value="max">SQUARE FEET</option>
<option value="500"> 500+ </option>
<option value="1000"> 1000+ </option>
<option value="1500"> 1500+ </option>
<option value="2000"> 2000+ </option>
<option value="2500"> 2500+ </option>
<option value="3000"> 3000+ </option>
<option value="3500"> 3500+ </option>
<option value="4000"> 4000+ </option>
        </select>
        </span></li>
<li>
<span class="custom-select">
        <select name="include">
          <option value="all">LISTING THAT INCLUDE</option>
		  <?php foreach($l_include as $listing){?>
          <option value="<?php echo $listing->id; ?>"><?php echo $listing->name; ?></option>
		  <?php } ?>
        </select>
        </span>
</li>		
</ul>
</div>
<div class="refine_search3">
<div class="refine_search-left">
<form action="" method="get">
<div class="div-box"><span><div class=""><input name="sale" type="radio" value="<?php $sale=1; echo $sale; ?>" ></div></span><span class="top-box">FOR SALE</span></div>
<div class="div-box"><span><div class=""><input name="sale" type="radio" value="<?php $rental=2; echo $rental; ?>" ></div></span><span class="top-box">RENTAL</span></div>
<ul>
<?php foreach($list3 as $type){?>
<li><span><div class=""><input name="ptype[]" type="checkbox" value="<?php echo $type->id; ?>" ></div></span><span><?php echo $type->type; ?></span></li>
<?php } ?>
</ul>
</form>
</div>
<div class="refine_search-right">
<div class="custom-boundry">
<div class="custom-boundry-box">
<small>CUSTOM BOUNDRY</small>
<span><i class="fa fa-pencil"></i>Creete boundry</span>

<div id="map-canvas"></div>


</div>
</div>
</div>
</div>
<div class="refine_search4">
<ul>
<li class="listing"><span><i class="fa fa-instagram"></i></span><span class="icon1">LISTING AMENITIES</span><span class="icon2"><img src="<?php echo base_url() ?>assets/fronted/images/arrow_down.png"></span></li>
<li class="listing2"><span><i class="fa fa-building-o"></i></span><span class="icon1">BUILDING AMENITIES</span><span class="icon2"><a href=""><img src="<?php echo base_url() ?>assets/fronted/images/arrow_down.png"></a></span></li>
<!-- <li><span class="icon4"><img src="<?php echo base_url() ?>assets/fronted/images/search_li_bg9.png"></span><span class="icon1">NEARBY TRANSIT</span><span class="icon2"><a href=""><img src="<?php echo base_url() ?>assets/fronted/images/arrow_down.png"></a></span></li> -->
</ul>
</div>
<div class="dishwasher">
<ul>
<?php foreach($l_amenity as $amenity1){?>
<li><div class=""><input name="listing[]" type="checkbox" value="<?php echo $amenity1->id; ?>" ></div><?php echo $amenity1->name; ?></li>
<?php } ?>
</ul>
</div>
<div class="dishwasher2">
<ul>
<?php foreach($b_amenity as $amenity2){?>
<li><div class=""><input name="building[]" type="checkbox" value="<?php echo $amenity2->id; ?>" ></div><?php echo $amenity2->name; ?></li>
<?php } ?>
</ul>
</div>
<div class="refine_search5"><a href="">RESET</a><a href="javascript:{}" onclick="document.getElementById('my_form2').submit(); return false;" class="btn">SEARCH</a></div>
</div>
</form>
</div>
<?php foreach($explore as $explore_list){?>
<div class="explore_box">
<figure><img src="<?php echo base_url()."assets/images/".$explore_list->image; ?>" alt="" /></figure>
<h3><?php echo $explore_list->heading; ?></h3>
<small><?php if(strlen($explore_list->content) >115): echo substr($explore_list->content,0,116).'...';else: echo $explore_list->content; endif; ?></small>
<a class="explore_btn" href="<?php echo base_url()."home/property_listing?type=all"; ?>">START EXPLORING</a>
</div>
<?php } ?>
</div>
<div class="right_sec">
<div id="TabbedPanels1" class="TabbedPanels">         	
            <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0" id="list"><img src="<?php echo base_url() ?>assets/fronted/images/search-icon1.png"><span>LIST</span></li>
				<li class="TabbedPanelsTab" tabindex="0" style="display:none;"><img src="<?php echo base_url() ?>assets/fronted/images/search-icon1.png"><span></span></li>
                <li class="TabbedPanelsTab" tabindex="0" id="photo"><img src="<?php echo base_url() ?>assets/fronted/images/search-icon2.png"><span>PHOTO</span></li>
                <li class="TabbedPanelsTab" tabindex="0" id="clk" onclick="initialization();"><img src="<?php echo base_url() ?>assets/fronted/images/search-icon3.png"><span>MAP</span></li>
            </ul>
            <div class="TabbedPanelsContentGroup hide_search">
                <div class="TabbedPanelsContent  tabbed">
                <div class="featured">
                <div class="save-search">
                <ul>
				
                <li><input type="hidden" value="<?php echo $request_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"><input type="hidden" value="<?php echo $name = substr($request_url, strrpos($request_url, '/') + 1); ?>"><a class="addsearch" href="">SAVE SEARCH</a></li>
                <li><form action="<?php echo base_url()."home/excel_detail" ?>" method="post" id="form_"><input type="hidden" name="dlt" value="<?php echo 	implode(",",$all_property_id); ?>"><a href="javascript:{}"<?php if(!empty($u_id)) { ?> onclick="document.getElementById('form_').submit(); return false;" <?php }else{ ?> onClick="alert('You are not login!'); return false; "  <?php } ?> ></form>EXPORT</a></li>
                <!-- <li><a href="">SHARE</a></li> -->
				</ul>
                </div>
                <div id="TabbedPanels2" class="TabbedPanels">
					<ul class="TabbedPanelsTabGroup">
					<li class="TabbedPanelsTab TabbedPanelsTabSelected" style="display:none;" tabindex="0">Relevence</li>
					<li class="TabbedPanelsTab TabbedPanelsTabSelected" style="display:none;" tabindex="0">Relevence</li>
						<li class="TabbedPanelsTab" tabindex="0"><a href="<?php if(!empty($_GET['sort_by'])){ echo $until.'&sort_by=featured'; }else{ echo $request_url_admin.'&sort_by=featured'; } ?>" <?php if(!empty($_GET['sort_by']) && $_GET['sort_by']=="featured"){ ?> style="color:#00008B !important;"<?php } ?>>Featured</a></li>
						<li class="TabbedPanelsTab" tabindex="0"><a href="<?php if(!empty($_GET['sort_by'])){ echo $until.'&sort_by=newest'; }else{ echo $request_url_admin.'&sort_by=newest'; } ?>" <?php if(!empty($_GET['sort_by']) && $_GET['sort_by']=="newest"){ ?> style="color:#00008B !important;"<?php } ?>> Newest </a></li>
						<li class="TabbedPanelsTab" tabindex="0"><a href="<?php if(!empty($_GET['sort_by'])){ echo $until.'&sort_by=price'; }else{ echo $request_url_admin.'&sort_by=price'; } ?>" <?php if(!empty($_GET['sort_by']) && $_GET['sort_by']=="price"){ ?> style="color:#00008B !important;"<?php } ?>> Price </a></li>
					</ul>
						<div class="TabbedPanelsContentGroup">
							<div class="TabbedPanelsContent">
								<div class="featured-box">
								<?php if(empty($detail)){?>
								<ul style="color: #C64343; font-size:25px; margin-top:25px; "> <i><b> No Result Found !!! </b></i></ul>
								<?php } ?>
									<ul>
										<?php $load = 1; foreach($detail as $data){ 
										if ($load > 4)
										$more = 'style="display:none"';
										else
										$more = '';
										?>
									<li class="blog-box" <?= $more ?> id="<?= $load ?>">
										<img src="<?php echo base_url()."assets/property_images/".$data->feature_image; ?>" height="259" width="265">
									<div class="pic">
										<span><img src="<?php echo base_url() ?>assets/fronted/images/search-icon5.png"><small><?php $img=$data->images; $image=explode(",",$img); echo count($image); ?></small></span>
										<?php if($data->featured=="active"){?><p>FEATURED</p><?php } ?>
									</div>
									<div class="text-box">
										<div class="soho-place">
											<span><?php echo $data->property; ?><br><small><?php echo $data->location; ?> <?php echo $data->property_id; ?></small></span>
												<span><img src="<?php echo base_url() ?>assets/fronted/images/search-icon4.png"><div class="text-box2">$<?php echo $data->price1; ?><br><small>Est. Payment: $10,540</small></div></span>
										</div>
										<strong><?php echo $data->bedroom; ?> BED + <?php echo $data->bathroom; ?> BATH APARTMENT</strong>
										<span><?php if(strlen($data->overview) >115): echo substr($data->overview,0,116).'...';else: echo $data->overview; endif; ?></span>
										<div class="text-box3">
											<a class="btn1" href="<?php echo base_url()."home/detail/".base64_encode($data->id); ?>">View Details&gt;</a>
											<a class="btn2 <?php $u_id=$this->session->userdata('u_id'); if(!empty($u_id)){ echo "contact"; }?>" <?php if(!empty($u_id)){?> onclick="getValue(<?php echo $aid=$data->edit_by; ?>)" <?php }else{?> onClick="alert('You are not login!'); return false; " <?php } ?> href="#">Contact Agent</a>
											<input type="hidden" value="<?php echo $data->id; ?>">
												<?php  $ptid=$data->id; $u_id=$this->session->userdata('u_id');
												$this->load->model('Fronted_model'); $num=$this->Fronted_model->saved_property_byid($ptid,$u_id); if($num==1){?>
											<a class="btn3 addsave" href="">Unsaved</a>
											<?php }else{ ?>
											<a class="btn3 addsave" href="">Save</a>
											<?php } ?>
										</div>
										<div class="text-box4">Listed By: <?php $aid=$data->edit_by; $this->load->model('Admin_model'); $result=$this->Admin_model->admin_detailbyid($aid); foreach($result as $detail){ echo $detail->company; } ?><?php $u_role=$this->session->userdata('u_role'); if($u_role == 3):?><a href="<?php echo base_url()."home/profile_professional/".base64_encode($aid);?>" style="margin-left:125px;">View Agent Profile</a><?php endif; ?></div>
									</div>
									</li>
									<li class="photo_review" <?= $more ?> id="<?= $load ?>" style="display:none;">
										<img src="<?php echo base_url()."assets/property_images/".$data->feature_image; ?>" height="259" width="265">
									<div class="pic">
										<span><img src="<?php echo base_url() ?>assets/fronted/images/search-icon5.png"><small><?php $img=$data->images; $image=explode(",",$img); echo count($image); ?></small></span>
										<?php if($data->featured==1){?><p>FEATURED</p><?php } ?>
									</div>
									<div class="text-box">
										<div class="soho-place">
											<span><?php echo $data->property; ?><br><small><?php echo $data->location; ?> <?php echo $data->property_id; ?></small></span>
										</div>
										<strong><?php echo $data->bedroom; ?> BED + <?php echo $data->bathroom; ?> BATH APARTMENT</strong>
										<span><?php if(strlen($data->overview) >115): echo substr($data->overview,0,116).'...';else: echo $data->overview; endif; ?></span>
										<?php $aid=$data->edit_by; $this->load->model('Admin_model'); $result=$this->Admin_model->admin_detailbyid($aid); foreach($result as $detail_){ ?>
										<strong> <b>Agent Name: </b> <?php echo $detail_->name; ?></strong>
										<div class="text-box4"> <b> Listed By: </b> <?php  echo $detail_->company;  ?></div>
										<?php } ?>
									</div>
									</li>
									<?php $load++; } ?>
									</ul>
									<?php
									if($c > 4 ){ ?>
									<div class="loading" id="load_more">
										<img src="<?php echo base_url(); ?>assets/fronted/images/load.gif">
										<p>LOADING MORE RESULTS</p>
									</div>
									<?php } ?>
								</div>
								
<div class="contact-box" style="width:450px !imporatnt; height:500px !important;">
<div class="login-detail">
<h3>Send a message to this agent</h3>
		<form method="post" action="<?php echo base_url()."home/contact_agent"; ?>">
		<input type="hidden" name="url" value="<?php echo $request_url_admin; ?>" >
          <div class="input-box">
		  <h4 style="color: #707070; margin-bottom:8px;">Email</h4>
		 <input type="hidden" id="ag_id" name="agent_id" value="" >
		<input type="email" placeholder="User Name" id="uemail" required name="email" value="<?php echo $this->session->userdata('u_email'); ?>" required autocomplete="off" style="border:1px solid #51a8ad;">
          </div>
          <div class="input-box">
		  <h4 style="color: #707070; margin-bottom:8px;">Subject</h4>
          <input type="text" placeholder="Subject" id="sub" required name="subject" autocomplete="off" style="border:1px solid #51a8ad;">
          </div>
		  <div class="input-box">
		  <h4 style="color: #707070; margin-bottom:8px;">Message</h4>
          <textarea name="message" cols="42" id="msg" rows="5" style="background-color: #ededed; border:1px solid #51a8ad; padding: 10px 0 0 19px;"></textarea>
          </div>
           <div class="input-box" style="width:34% !important; float:right !important;">
          <input type="submit" value="SEND" class="signin sign" style="height:50px !important;">
          </div>
     </form>
      </div>
</div>
<div class="overly"></div>	
								<div id="map" style="width: 100%; height: 480px; display:none;"></div>	
							</div>
						</div>
				</div>
                </div>
			</div> 	
        </div>
		<div class="TabbedPanelsContentGroup view_search" style="display:none;">
		<h2 style="text-align:center; color:#4D7F7A;  font-size: 28px;">Saving Search's url Listing</h2>
				<ul class="list-group">
	                <?php foreach($mysearch as $searchlist){?>			 
					<li class="list-group-item" style="margin:18px;  font-size: 17px;"><img src="<?php echo base_url() ?>assets/fronted/images/arrow.jpg"> <a href="<?php echo $searchlist->search_url;  ?>"> <?php  $string =$searchlist->name;  echo substr($string,0,60).'...'; ?></a></li>
					<?php } ?>
				</ul>
		</div>
		<div class="nearby-neighborhoods">
<h2>NEARBY NEIGHBORHOODS</h2>
<ul>
<li>Tribeca for Sale</li>
<li>Greenwich Village for Sale</li>
<li>West Village for Sale</li>
<li>Nolita for Sale</li>
<li>Little Italy for Sale</li>
<li>Chinatown for Sale</li>
<li>All Downtown for Sale</li>
</ul>
</div>
</div>


</div>
<div class="ad_block"><span>Ad Space</span></div>
</div>
</section>

<script>
function getValue(h){
	
	var x=h;
	$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Ajax_action/agent_email";?>",
												data: {
														'ag_id': x,
														},
												success:function(response){
													if(response){
														$("#ag_id").val(response);
													}
													else{
															alert( "Something went wrong!");
													}
												}
												});
}
</script>	
 <!-- ---------- Save Property and save Search by url----------------- -->
<script>
				$(document).ready(function(){
										$('.addsave').click(function(){
											var session= '<?php echo $uid=$this->session->userdata('u_id'); ?>';
							if(session){
												var name = $(this).prev().val();
												var cnt_id = 'cnt=' + name;
												var a = $(this);
												$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Ajax_action/save_property";?>",
												data: cnt_id,
												success:function(responce){
													if(responce == 1){
														var str = $.trim($(a).text());
														if(str == 'Save'){
																$(a).text('Unsaved');
																alert("You have saved this property");
																	location.reload();																
														}
														if(str == 'Unsaved'){
															$(a).text('Save');	
															alert("You have unsaved this property");
																location.reload();
														}
													}
												}
												});
												return false;
							}else{
								alert("You are not login.");
								return false;
							}
												});
										
										$('.addsearch').click(function(){
											var session= '<?php echo $uid=$this->session->userdata('u_id'); ?>';
							if(session){
												var name = $(this).prev().val();
												var url = $(this).prev().prev().val();
												$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Ajax_action/save_search";?>",
												data: {
														's_name': name,
														's_url': url
														},
												success:function(responce){
													if(responce == 1){
														alert("You have saved this search");
														location.reload();
													}if(responce == 'match'){
															alert( "This search already Saved!");
													}
													if(responce == 0){
															alert( "Something went wrong!");
													}
												}
												});
												return false;
							}else{
								alert("You are not login.");
								return false;
							}
												});		
												
												
												});
																			
</script>
 
 
 <link href="<?php echo base_url() ?>assets/fronted/css/multicheck.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>assets/fronted/js/multiple.js" type="text/javascript"></script>
 <!-- ---------- For multi Location ----------- -->

<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
   <!-- ---------- cutom boundary ----------- -->
  
    <style>
#map-canvas {
    width: 750px;
    height: 400px;
}
#info {
    position: absolute;
    font-family: arial, sans-serif;
    font-size: 18px;
    font-weight: bold;
}
    </style>
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
//var myPolygon;
function initialize() {
  // Map Center
  var myLatLng = new google.maps.LatLng(33.5190755, -111.9253654);
  // General Options
  var mapOptions = {
    zoom: 12,
    center: myLatLng,
    mapTypeId: google.maps.MapTypeId.RoadMap
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
  // Polygon Coordinates
  var triangleCoords = [
    new google.maps.LatLng(33.5362475, -111.9267386),
    new google.maps.LatLng(33.5104882, -111.9627875),
    new google.maps.LatLng(33.5004686, -111.9027061)
  ];
  // Styling & Controls
  myPolygon = new google.maps.Polygon({
    paths: triangleCoords,
    draggable: true, // turn off if it gets annoying
    editable: true,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  });

  myPolygon.setMap(map);
  //google.maps.event.addListener(myPolygon, "dragend", getPolygonCoords);
  google.maps.event.addListener(myPolygon.getPath(), "insert_at", getPolygonCoords);
  //google.maps.event.addListener(myPolygon.getPath(), "remove_at", getPolygonCoords);
  google.maps.event.addListener(myPolygon.getPath(), "set_at", getPolygonCoords);
}

//Display Coordinates below map
function getPolygonCoords() {
  var len = myPolygon.getPath().getLength();
  var htmlStr = "";
  for (var i = 0; i < len; i++) {
    htmlStr += "new google.maps.LatLng(" + myPolygon.getPath().getAt(i).toUrlValue(5) + "),<br>";
    //Use this one instead if you want to get rid of the wrap > new google.maps.LatLng(),
    //htmlStr += "" + myPolygon.getPath().getAt(i).toUrlValue(5) + "<br>";
  }
  
}

    </script>
	 <!-- ----------Show Multiple locations -----------  -->

    <script>
	//var a = array(); 
	function initialization() {
		//alert
    // Define your locations: HTML content for the info window, latitude, longitude

    var locations = <?php echo $arr; ?>
   // var locations = a;
    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
    
    var icons = [
      iconURLPrefix + 'red-dot.png',
      iconURLPrefix + 'green-dot.png',
      iconURLPrefix + 'blue-dot.png',
      iconURLPrefix + 'orange-dot.png',
      iconURLPrefix + 'purple-dot.png',
      iconURLPrefix + 'pink-dot.png',      
      iconURLPrefix + 'yellow-dot.png'
    ]
    var iconsLength = icons.length;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(26.900831200000000000, 76.353712299999980000),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
         position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 160
    });

    var markers = new Array();
    
    var iconCounter = 0;
    
    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: icons[iconCounter]
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= iconsLength) {
      	iconCounter = 0;
      }
    }
	

    function autoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      for (var i = 0; i < markers.length; i++) {  
				bounds.extend(markers[i].position);
      }
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    autoCenter();
	}
  </script>
  <!-- ---------- show and hide map and listing and load more ----------- -->
  <script>
$(document).ready(function(){
	$("#list").click(function(){
		location.reload();
    });
	
    $("#clk").click(function(){
		$(".featured-box").hide();
		$("#map").show();
    });
	
	$("#photo").click(function(){
        $("#map").hide();
		$(".blog-box").hide();
		$(".featured-box").show();
		$(".photo_review").show();
    });
	
	$(".searching").click(function(){
		$(".hide_search").hide();
		$(".view_search").show();
		});
	
});



function Load_More(ID, cls, load_count){

   for (var elm = 1; elm <= load_count; elm++){
       var inc = 1;
       var id = parseInt($('.' + cls + ':visible:last').attr('id')) + inc;
       $('#' + id).slideDown('slow');
       if ($('.' + cls + ':last').is(':visible')) {
           $('#' + ID).hide();
       }
   }
}

$(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 700) {
					Load_More('load_more', 'blog-box', '2');
        }
    });

	
</script>
<script>
setTimeout(function() {
$('.bootbox').delay(2000).slideUp('slow');
    });
</script>
<script>
$(document).ready(function(){
    $("#down").click(function(){
        $(this).next().toggle();
    });
	$(".searching").click(function(){
		$(this).next().toggle();
    });
});
</script>

