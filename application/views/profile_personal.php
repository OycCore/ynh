<?php foreach($detail as $data){ ?>
<section id="main">
<div class="profile_banner">
<div class="wrapper">
<div class="frame">
<img src="<?php echo base_url() ?>assets/fronted/images/image_frame.png" alt="" />
<figure class="profile_img">
<img src="<?php if(!empty($data->image)){ echo base_url()."assets/agent_images/".$data->image; }else{ echo base_url()."assets/fronted/images/user.png"; } ?>" alt="" width="322" height="322" style="border-radius:50%;"/>
</figure>
<small><a href="<?php echo base_url()."dashboard/user"; ?>"><img src="<?php echo base_url() ?>assets/fronted/images/edit_icon.png" alt="" /> Edit Profile</a></small>
</div>

<div class="profile_details">
<div class="title_box">
<h2><?php echo $data->name; ?></h2>
<h4><?php echo $data->company; ?></h4>
</div>
<!--<ul class="options">
<li><a href="#" class="add_photo">+ photo</a></li>
<li><a href="#" class="share">share</a></li>
<li><a  -->
<p><?php echo $data->about; ?></p>
</div>
</div>
</div>

<div class="wrapper">
<div class="rating_box">
<ul>
<!-- <li><h3>fav neighborhood:</h3><small>SOHO, GREENWICH VILLAGE</small></li> -->
<li><h3>follow <?php echo $data->name; ?></h3><ul class="social_list">
<li><a href="<?php echo $data->facebook; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/fronted/images/contact_sam1.png" alt=""/></a></li>
<li><a href="<?php echo $data->twitter; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/fronted/images/contact_sam2.png" alt=""/></a></li>
<li><a href="<?php echo $data->google; ?>" target="_blank"><img src="<?php echo base_url() ?>assets/fronted/images/contact_sam3.png" alt=""/></a></li></ul></li>
</ul>

</div>
<div class="main_container">

<div class="left_cont">
<h3>Preferred Neighborhoods (<?php echo count($myhome); ?>)</h3>

<ul class="comment_list">
<?php $load = 1; foreach($myhome as $homelist){ $pt_id=$homelist->property_id; $s_prty=$this->Fronted_model->property_detail_byid($pt_id); foreach($s_prty as $prty){
	if ($load > 1)
                        $more = 'style="display:none"';
                      else
                        $more = ''; ?>
<li class="review-box preferred" <?= $more ?> id="<?= $load ?>">
<figure><img src="<?php echo base_url()."assets/property_images/".$prty->feature_image; ?>" alt="" height="125" style="width:200px !important;"/></figure>
<div class="comment_box view-box">
<div class="title_box">
<h4 style="color:#3568BA;"><?php echo $prty->property; ?></h4>
<strong><?php echo $prty->location; ?></strong>
<small><?php echo $prty->bedroom; ?> BED + <?php echo $prty->bathroom; ?> BATH APARTMENT</small>
</div>
</div>
</li>
<?php $load++; } } $p_count = count($myhome); 
 if($p_count > 1) { ?>
<a class="view_btn" href="javascript:void(0)" id="load_more" onClick="Load_More('load_more', 'review-box', '1');" >view more ></a>
<?php } ?>
</ul>

</div>


<div class="right_cont">

<div class="add_box">
ADD SPACE
</div>

<div class="contact_box">
<h3>Contact Information</h3>

<div class="inner_content">
<h4><?php echo $data->name; ?></h4>
<address><?php echo $data->address; ?></address>
<small class="contact_num"><?php echo $data->phone; ?> </small>
<a class="email" href="mailto:sam@myemail.com"><?php echo $data->email; ?></a>
<?php $ag_id=$data->interest; $a_interest=$this->Admin_model->interest_detailbyid($ag_id); foreach($a_interest as $show){?>
<small class="space">Interest in : <span> <?php echo $show->name; ?></span></small>
<?php } ?>
<small class="space">Fav Restaurant : <span> <?php echo $data->restaurant; ?></span></small>
<small>Fav Activity to do in NEW YORK city? </small>
<span><?php echo $data->activity; ?></span></div>
</div>

<?php foreach($explore as $explore_list){ ?>
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

<script>


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