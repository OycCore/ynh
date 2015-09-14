<?php 
if (isset($_SESSION['MESSAGE'])):
if ($_SESSION['MESSAGE'] === 'review_success'):
?>
	<script>
            bootbox.alert("Your review has been saved successfully!", function() {
                console.log("Alert Callback");
            });
    </script>
<?php endif; unset($_SESSION['MESSAGE']);	endif;?>
<?php foreach($detail as $data){ ?>
<section id="main">
<div class="profile_banner">
<div class="wrapper">
<div class="frame">
<img src="<?php echo base_url() ?>assets/fronted/images/image_frame.png" alt="" />
<figure class="profile_img">
<img src="<?php if(!empty($data->image)){ echo base_url()."assets/agent_images/".$data->image; }else{ echo base_url()."assets/fronted/images/user.png"; } ?>" alt="" width="322" height="322" style="border-radius:50%;"/>
</figure>
<?php $u_id=$this->session->userdata('u_id'); if($u_id==$data->id){?>
<small><a href="<?php echo base_url()."dashboard/agent"; ?>"><img src="<?php echo base_url() ?>assets/fronted/images/edit_icon.png" alt="" /> Edit Profile</a></small>
<?php } ?>
</div>

<div class="profile_details">
<div class="title_box">
<h2><?php echo $data->name; ?></h2>
<h4><?php echo $data->company; ?></h4>
</div>
<!--
<ul class="options">
<li><a href="#" class="add_photo">+ photo</a></li>
<li><a href="#" class="share">share</a></li>
<li><a href="#" class="bookmark">bookmark</a></li>
</ul> -->
<p><?php echo $data->about; ?></p>
<!-- <a class="more_info" href="#"><span>+</span> More about <?php echo $data->name; ?></a> -->
</div>
</div>

</div>

<div class="wrapper">
<div class="rating_box">
<ul>
<li><h3>Avg Rating:</h3><figure class="rating"><?php foreach($average as $avg_agent){ $avg_rating=$avg_agent->star; for($i=1; $i<=5; $i++){ $star=$avg_rating; if($i <= $star){?><img src="<?php echo base_url() ?>assets/fronted/images/rating1.png" alt="" /> <?php }else { ?> <img src="<?php echo base_url() ?>assets/fronted/images/rating2.png" alt="" /><?php } } }?></figure></li>
<li><h3>BUSINESS HOURS:</h3><small><?php $hour=explode(",",$data->b_hour); echo $hour[0].'-'.$hour[1].':'. $hour[2].' '.$hour[3] .'-'. $hour[4].' '.$hour[5]; ?></small></li>
<li><h3>Profile Views:</h3><small><?php foreach($view as $view_list){ echo $view_list->view; }?> Views</small></li>
<li><h3>follow <?php echo $data->name; ?></h3><ul class="social_list">
<li><a href="<?php echo $data->facebook; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/fronted/images/contact_sam1.png" alt=""/></a></li>
<li><a href="<?php echo $data->twitter; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/fronted/images/contact_sam2.png" alt=""/></a></li>
<li><a href="<?php echo $data->google; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/fronted/images/contact_sam3.png" alt=""/></a></li></ul></li>
</ul>

</div>

<div class="main_container">
<div class="left_cont">
<?php $u_id=$this->session->userdata('u_id'); if($u_id!=$data->id){?>
<button id="link" class="btn1" style="cursor:pointer; border:none;">Write a review</button>
<div class="review_" style="display:none;">
<h3>Write a review</h3><br>
<span class="stars" style="width:16%;">
<input type="hidden" value="<?php echo $data->id; ?>">
<div id="star"></div>
</span><br>
<div class="review_box">
<form action="<?php echo base_url()."home/user_review"?>" method="post" name="myform" id="myinput">
<fieldset style="width:78%;">
<textarea id="val_review" style="background-color:#E9C4F2; padding:10px;"name="title" placeholder="Start the conversation....." rows="7" cols="70"></textarea>
</fieldset>
<input type="hidden" name="id" value="<?php echo $data->id; ?>">
<input type="submit" class="btn2 review" value="Submit" style="float:right; border:none; margin-top:5px;">
</form>
</div>
</div>
<br><br><br>
<?php } ?>
<h3>recommended reviews (<?php echo count($r_data); ?>)<!--<small>Sort by:   <span>Date</span>   |    Rating </small>--> </h3>

<ul class="comment_list">
<?php if(empty($r_data)):?>
<li class="review-box">
<h2>No Review Here !!</h4>
</li>
<?php endif; ?>
<?php $load = 1; foreach($r_data as $r_detail){ if ($load > 1)
                        $more = 'style="display:none"';
                      else
                        $more = '';?>
<li class="review-box" <?= $more ?> id="<?= $load ?>">
<?php $uid=$r_detail->user_id; $this->load->model('Admin_model'); $a_detail=$this->Admin_model->admin_detailbyid($uid); 
foreach($a_detail as $admin) { ?>
<figure><?php if(!empty($admin->image)){?><img src="<?php echo base_url()."assets/agent_images/".$admin->image; ?>" alt="" height="70" width="75"/> 
<?php } else{ ?><img src="<?php echo base_url() ?>assets/fronted/images/user_icon.png" alt="" /><?php } ?></figure>
<div class="comment_box">
<div class="title_box">

<h4><?php echo $aname=$admin->name; ?></h4>
<small><?php $date=$r_detail->date; $d=explode(" ",$date); $format=$d[0]; 
		$d_format=date_create_from_format("Y-m-d",$format);echo date_format($d_format,"j-M-Y");?></small>
		
</div>
<figure><?php for($i=1; $i<=5; $i++){ $star=$r_detail->star; if($i <= $star){?><img src="<?php echo base_url() ?>assets/fronted/images/rating1.png" alt="" /> <?php }else { ?> <img src="<?php echo base_url() ?>assets/fronted/images/rating2.png" alt="" /><?php } }?></figure>
<p> <?php echo $r_detail->review; ?></p>
<small class="feedback">Was this review helpful?</small>
<input type="hidden" name="agent_id" value="<?php echo $r_detail->agent_id; ?>" />
<input type="hidden" name="user_id" value="<?php echo $r_detail->user_id; ?>" />
<a class="feed_btn active savefeedback" href="#">Yes</a> <a class="feed_btn" href="#">Not really</a>
</div>
<?php } ?>
</li>
<?php $load++; } 
$review_count = count($r_data); 
 if($review_count > 1) { ?>
<a class="view_btn" href="javascript:void(0)" id="load_more" onClick="Load_More('load_more', 'review-box', '1');" >view more ></a>
<?php } ?>
</ul>

</div>


<div class="right_cont">

<a class="contact_sam" href="#" title="<?php echo $data->phone; ?>"><img src="<?php echo base_url() ?>assets/fronted/images/contact_icon.png" alt="" /> CONTACT agent</a>

<div class="add_box">
ADD SPACE
</div>

<div class="contact_box">
<h3>Contact Information</h3>

<div class="inner_content">
<h4><?php echo $data->name; ?></h4>
<span><?php echo $data->company; ?></span>
<address><br/><?php echo $data->address; ?></address>
<small class="contact_num"><?php echo $data->phone; ?> </small>
<!-- <small class="contact_num">(432) 325-251  </small> -->
<a class="email" href="mailto:barry@nyrealestate.com"><?php echo $data->email; ?></a>
<?php $ag_id=$data->interest; $a_interest=$this->Admin_model->interest_detailbyid($ag_id); foreach($a_interest as $show){?>
<small class="space">Interest in : <span> <?php echo $show->name; ?></span></small>
<?php } ?>
<small class="space">Fav Restaurant : <span> <?php echo $data->restaurant; ?></span></small>
<small>Fav Activity to do in NEW YORK city? </small><span><?php echo $data->activity; ?></span>
</div>
</div>

<div class="current_listing">
<h3>Current Listings</h3>
<div class="inner_content">
<ul>
<?php foreach($property as $list){?>
<li><div class="content_li"><figure><img src="<?php echo base_url()."assets/property_images/".$list->feature_image; ?>" alt="" height="90" width="110"/></figure> <div class="list_info"> <h4><?php echo $list->property; ?></h4> <small class="location"><?php echo $list->location; ?></small><small class="price">$<?php echo $list->price1; ?></small></div></div>
<a class="view_listing_btn" href="<?php echo base_url()."home/detail/".base64_encode($list->id); ?>"> view listing</a></li>
<?php } ?>
</ul>
</div>
</div>


<div class="viewer_list">
<h3>People also viewed.....</h3>
<ul class="listing">
<?php  $j=1; foreach($m_rating as $rating_list){ $star=$rating_list->star;  if($star==5 && $j<=3){ $aid=$rating_list->agent_id; $this->load->model('Admin_model'); $detail_a=$this->Admin_model->admin_detailbyid($aid); foreach($detail_a as $admin_view) {?>
<li><figure><img src="<?php echo base_url()."assets/agent_images/".$admin_view->image; ?>" alt="" height="107" width="107" style="border-radius:50%;"/></figure><div class="content"><h4><?php echo $admin_view->name; ?></h4><h6><small><?php echo $admin_view->company; ?></small></h6>
<?php for($i=1; $i<=5; $i++){ if($i <= $star){?><img src="<?php echo base_url() ?>assets/fronted/images/rating1.png" alt="" /> <?php }else { ?> <img src="<?php echo base_url() ?>assets/fronted/images/rating2.png" alt="" /><?php } } ?></div></li>
<?php } $j++; } } ?>
</ul>
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
</div>
</div>
</section>

<?php } ?>

<script src="<?php echo base_url() ?>assets/fronted/js/jquery.raty.js" type="text/javascript"></script>
<script>

$.fn.raty.defaults.path = '<?php echo base_url() ?>assets/fronted/images';
$('#star').raty();

$('#star').on('click',function(){
	 
									var star=($(this).find('input').val());
							var a = $(this).prev().val();
							$.ajax({
							type:"POST",
							url:"<?php echo base_url()."admin/Ajax_action/user_starreview";?>",
							data:{
									'ag_id': a,
									'star_val': star
								},
							success:function(){
							alert( "User rating has been saved" );
							}
							});
							
});

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
<script>
$(document).ready(function(){
	
	$(".review").click(function(){
		var vd = $('#val_review').val();
		if(vd == ''){
			alert("Please enter your review");
			return false;
		}
	});
	
    $("#link").click(function(){
		$('#link').hide();
	  $('.review_').slideDown();
    });
	
	$('.savefeedback').click(function(){
												var aid_ = $(this).prev().prev().val();
												var uid_ = $(this).prev().val();
												$.ajax({
												type:"POST",
												url:"<?php echo base_url()."admin/Ajax_action/give_feedback";?>",
												data: {'user': uid_,'agent': aid_},
												success: function (response) {
													if(response){
												alert("Thank you ! giving your Feedback");
													}
												}
												});
												return false;
												});
	
	});
	</script>