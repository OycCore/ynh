<?php 
if (isset($_SESSION['MESSAGE'])): 
if ($_SESSION['MESSAGE'] === 'sharing_success'): ?>
	<script>
            bootbox.alert("<h3><b><i>This property has been shared successfully!</i></b></h3>", function() {
                console.log("Alert Callback");
            });
  </script>
<?php endif; if ($_SESSION['MESSAGE'] === 'review_done'): ?>
	<script>
            bootbox.alert("<h3><b><i>Your review has been saved successfully</i></b></h3>", function() {
                console.log("Alert Callback");
            });
  </script>	  
<?php endif; unset($_SESSION['MESSAGE']);	endif;?>

<script type="text/javascript" src="<?php echo base_url() ?>assets/fronted/pop_up/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/fronted/pop_up/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/validate/css/screen.css">


<section id="main">
<?php foreach($detail as $data){?>
<div class="wrapper">
<div class="top_row">

<h2><?php echo $data->property; ?></h2>

<span class="stars" style="width:16%;">
<input type="hidden" value="<?php echo $data->id; ?>">
<div id="star"></div>
</span>

<a class="review" href="" id="link" <?php $uid=$this->session->userdata('u_id'); if(!empty($uid)) {  ?>  Onclick="document.myform.title.focus();  return false;" <?php }else{ ?> href="#" onClick="alert('You are not login!');  return false;" <?php } ?> >write a review</a>

<ul class="options">
<li><a class="add_photo" <?php $uid=$this->session->userdata('u_id'); if(!empty($uid)) {  ?> id="modal_trigger" href="#modal" <?php }else{ ?> href="" onClick="alert('You are not login!'); return false; " <?php } ?> >add photo</a></li>
		<div id="modal" class="popupContainer" style="display:none; width:415px;">
				<header class="popupHeader">
					<span class="header_title">Add Photo</span>
					<span class="modal_close"><i class="fa fa-times"></i></span>
				</header>
		
				<section class="popupBody">
					<!-- Social Login -->
					<div class="social_login">
					<form method="post" id="upload" action="<?php echo base_url()."home/add_photo"?>" enctype="multipart/form-data">
						<div class="">
							<p> 
								<h3>Image to upload:</h3> 
								<input type="hidden" name="pid" value="<?php echo $data->id; ?>">
								<input type="hidden" name="images" value="<?php echo $data->images; ?>">
								<input id="file" type="file" name="file" style="border:none;"> </br>
							</p>
							<p> 
								<input class="btn1" type="submit" value="Upload me!" style="border:none; float:right;"> 
							</p> 
						</div>
					</form>
					</div>
				</section>
		</div>

<li><a class="share" <?php $uid=$this->session->userdata('u_id'); if(!empty($uid)) {  ?>  href="#shared" id="shared_trigger" <?php }else{ ?> href="" onClick="alert('You are not login!'); return false; " <?php } ?> >share</a></li>
		<div id="shared" class="popupContainer" style="display:none; width:465px;">
				<header class="popupHeader" style="margin-bottom:15px;">
					<span class="header_title">Share This Listing</span>
					<span class="modal_close"><i class="fa fa-times"></i></span>
				</header>
		
				<section class="popupBody">
					<!-- Social Login -->
					<div class="social_login">
					<form method="post" id="sform" action="<?php echo base_url()."home/share_listing"; ?>">
						<div class="shared_listing">
							<p> 
								<h4>Your Email</h4>
								<input type="hidden" name="pid" value="<?php echo $data->id; ?>">
								<input type="hidden" name="url" value="<?php echo $request_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
								<input type="email" name="email" class="form-control shared_form" placeholder="Your Email">
							</p>
							<p> 
								<h4>Friend's Email Address</h4>
								<input type="email" name="femail" class="form-control shared_form" placeholder="Friend Email">
							</p>
							<p> 
								<h4>Message(Optional)</h4>
								<textarea class="form-control mesg" name="message" rows="5"></textarea>
							</p>
							<p> 
								<input class="btn3" type="submit" value="Send" style="border:none; float:right;  margin-right: 10%;"> 
							</p> 
						</div>
					</form>
					</div>
				</section>
		</div>
		

<li><input type="hidden" value="<?php echo $data->id; ?>"><input type="hidden" value="<?php echo $request_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
<a class="bookmark" href="">bookmark</a></li>
</ul>
</div>

<div class="left_container">
<div class="slider_container">
<img src="<?php echo base_url()."assets/property_images/".$data->feature_image; ?>" alt="" width="700" height="392"/>
<ul class="thumbnails">
<?php $mimage=$data->images; $i=explode(",",$mimage); foreach($i as $img){?>
<li><a href="#"><img src="<?php echo base_url()."assets/property_images/".$img; ?>" alt="" width="147" height="124"/></a></li>
<?php } ?>
</ul>
</div>

<h3>overview</h3>
<span><?php echo $data->overview; ?></span>

<h3>reviews</h3>
<ul>
			<?php if(!empty($review)){ $load = 1; foreach($review as $r_data){ 
			if ($load > 2)
                        $more = 'style="display:none"';
                      else
                        $more = '';
			?>
<li class="review-box" <?= $more ?> id="<?= $load ?>">
	<div class="left_box"><?php $uid=$r_data->user_id; $this->load->model('Admin_model'); $a_detail=$this->Admin_model->admin_detailbyid($uid); 
		foreach($a_detail as $admin) { if(!empty($admin->image)):?>
		
			<img src="<?php echo base_url()."assets/agent_images/".$admin->image; ?>" alt="" height="70" width="75"/>
			<?php else: ?>
			<img src="<?php echo base_url() ?>assets/fronted/images/user_icon.png" alt="" />
			<?php endif; ?>
	</div>
	<div class="right_box"> <h4><?php echo $admin->name; ?></h4>
	<?php } ?>
		<small><?php $date=$r_data->r_date; $d=explode(" ",$date); $format=$d[0]; 
		$d_format=date_create_from_format("Y-m-d",$format);echo date_format($d_format,"j-M-Y");?></small>
		<p><?php echo $r_data->review; ?></p>
	</div>
</li>
			<?php $load++; } }else{?>
			<li class="review-box" > <h1> No Review Here .... </h1> </li>
			<?php }
$review_count = count($review); 
 if($review_count > 2){?>
<a class="view_btn" href="javascript:void(0)" id="load_more" onClick="Load_More('load_more', 'review-box', '1');" >view more ></a>
<?php } ?>
</ul>
<?php $uid=$this->session->userdata('u_id'); if(!empty($uid)) { ?>
<div class="review_box" id="f">
<h3>Write A Review</h3>

<figure><img src="<?php echo base_url() ?>assets/fronted/images/user_icon.png" alt="" /></figure>

<form action="<?php echo base_url()."home/review"?>" method="post" name="myform" id="myinput">
<fieldset>
<textarea id="val_review" style="background-color:#E9C4F2; padding:8px;"name="title" placeholder="Start the conversation....." rows="5" cols="70"></textarea>
</fieldset>
<input type="hidden" name="id" value="<?php echo $data->id; ?>">
<input type="submit" class="btn2 rev" value="Submit" style="float:right; border:none; margin-top:5px;">
</form>

</div>
<?php } ?>

</div>
<div class="right_container">
<div class="highlights">
<div id="googleMap" style="width:434px; height:379px;  margin-bottom: 15px;">

</div>
<h3>Neighborhood Highlights</h3>

<div class="row"><span>trains:</span><ul class="train_list">
		<?php $train=$data->train; $ext=explode(",",$train); foreach($ext as $t){ $this->load->model('Admin_model'); $result=$this->Admin_model->select_train(); foreach($result as $train_id) { $tid=$train_id->id; if($tid==$t){?>
		<li><a href="#" title="Trains"><?php echo $train_id->train; ?></a></li><?php } } }?></ul>
</div>
<div class="row"><span>buses:</span><ul class="bus_list">
		<?php $bus=$data->buses; $exb=explode(",",$bus); foreach($exb as $b){ $this->load->model('Admin_model'); $result=$this->Admin_model->select_bus(); foreach($result as $bus_id) { $bid=$bus_id->id; if($bid==$b){?>
		<li><a href="#" title="Buses"><?php echo $bus_id->buses; ?></a></li><?php } } }?></ul>
</div>
<?php if($data->purpose==2){?>
<div class="row"><span>rental prices:</span><small>$<?php echo $data->price1; ?> - $<?php echo $data->price2; ?></small></div>
<?php }else{ ?>
<div class="row"><span>sales prices:</span><small>$<?php echo $data->price1; ?> - $<?php echo $data->price2; ?> </small></div>
<?php } ?>
<div class="row"><span>landmarks:</span><small><?php echo $data->landmark; ?></small></div>
<div class="row"><span>school districts:</span><small><?php echo $data->school; ?></small></div>
<div class="row"><span>police precincts:</span><small><?php echo $data->police; ?></small></div>

</div>

<?php if(!empty($consider)){?>
<div class="highlights">
<h3>Have You Considered.....</h3>
<ul class="city_list">
<?php foreach($consider as $b_detail){?>
<li><figure><img src="<?php echo base_url()."assets/property_images/".$b_detail->feature_image; ?>" alt="" width="150" height="80" /></figure><a href="<?php echo base_url()."home/detail/".base64_encode($b_detail->id); ?>"><small><?php echo $b_detail->property; ?></small></li>
<?php }  ?>
</ul>

</div>
<?php } ?>

<div class="add_box">

<small>Ad Space</small>
</div>

</div>

</div>
<?php } ?>
</section>

<script src="<?php echo base_url() ?>assets/validate/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/validate/additional-methods.min.js"></script>
<script src="<?php echo base_url() ?>assets/fronted/js/jquery.raty.js" type="text/javascript"></script>
<script>
$.fn.raty.defaults.path = '<?php echo base_url() ?>assets/fronted/images';
$('#star').raty();


$('#star').on('click',function(){
	
							var session= '<?php echo $uid=$this->session->userdata('u_id'); ?>';
							if(session){ 
									var star=($(this).find('input').val());
							var p = $(this).prev().val();
							$.ajax({
							type:"POST",
							url:"<?php echo base_url()."admin/Ajax_action/insert_star";?>",
							data:{
									'pty_id': p,
									's_val': star
								},
							success:function(){
							alert( "Star rating has been saved" );
							}
							});
							}else{
								alert("You are not login.");
							}
							
});

//------------------------- add photo js ---------------------------------

	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
	
	$( document ).ready(function() {
		$("#upload").validate({
			rules: {
				    file: {
						required: true,
						accept: "jpg,png,jpeg,gif"
					}
			},
				
			messages: {
				file: {
						required:"Please select image",
						accept: "only accept jpg,jpeg,png,gif file image"
					}
			}
			
		});
	
    });
// --------------------------- *** ----------------------------------	

//------------------------- Share js ---------------------------------
	
	$("#shared_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$( document ).ready(function() {
	$("#sform").validate({
			rules: {
				    email: {
						required: true,
						email: true
					},
					femail: {
						required: true,
						email: true
					}
			},
			
			messages: {
				email: {
						required: "<br><b>Please enter email address</b>",
						email: "<br><b>Your email address must be in the format of name@domain.com</b>"
					},
				femail: {
						required: "<br><b>Please enter email address",
						email: "<br><b>Your email address must be in the format of name@domain.com</b>"
					}	
			}
			
		});
		
		$(".rev").click(function(){
		var vd = $('#val_review').val();
		if(vd == ''){
			alert("Please enter your review");
			return false;
		}
	});
		
		 });

//--------------------------------- *** -------------------------------		 
	
	$('.bookmark').click(function(){
											var session= '<?php echo $uid=$this->session->userdata('u_id'); ?>';
							if(session){
		
												var url = $(this).prev().val();
												var pid = $(this).prev().prev().val();
												$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Ajax_action/save_bookmark";?>",
												data:{
													'p_id': pid,
													'b_url': url
												},
												success:function(responce){
													if(responce == 'match'){
															alert( "Already bookmark saved!");
													}
													if(responce == 1){
														alert("Save bookmark");
													}if(responce == 0){
															alert( "Something went wrong!");
													}
												}
												});
												return false;
												
							}else{
								alert("You are not Login.");
								return false;
							}
												});

//view more js
												
	function Load_More(ID, cls, load_count)
	{
	   for (var elm = 1; elm <= load_count; elm++){
		   var inc = 1;
		   var id = parseInt($('.' + cls + ':visible:last').attr('id')) + inc;
		   $('#' + id).slideDown('slow');
		   if ($('.' + cls + ':last').is(':visible')) {
			   $('#' + ID).hide();
		   }
	   }
	}																	
											
</script>
<script>
setTimeout(function() {
$('.bootbox').delay(2000).slideUp('slow');
    });
</script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<?php foreach($map as $l){
$lat=$l->lat;
$log=$l->log;
$address=$l->full_address;
}
?>
<script>
var myCenter=new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $log; ?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"<?php echo $address; ?>"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
