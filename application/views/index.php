<?php 
if (isset($_SESSION['MESSAGE'])):
if ($_SESSION['MESSAGE'] === 'login_success'):
?>
	<script>
            bootbox.alert("You have login successfully!", function() {
                console.log("Alert Callback");
            });
    </script>
<?php endif; if ($_SESSION['MESSAGE'] === 'login_unsuccess'): ?>
	<script>
            bootbox.alert("You email and password is wrong!", function() {
                console.log("Alert Callback");
            });
    </script>	
<?php endif; if ($_SESSION['MESSAGE'] === 'signup_success'): ?>
	<script>
            bootbox.alert("Signup successfully! You have recieved a cofimation mail.", function() {
                console.log("Alert Callback");
            });
    </script>	
<?php endif; if ($_SESSION['MESSAGE'] === 'signup_unsuccess'): ?>
	<script>
            bootbox.alert("Please fill up all fields!", function() {
                console.log("Alert Callback");
            });
    </script>	
<?php endif; if ($_SESSION['MESSAGE'] === 'logout_success'): ?>
	<script>
            bootbox.alert("You have logout successfully!", function() {
                console.log("Alert Callback");
            });
    </script>
<?php endif; if ($_SESSION['MESSAGE'] === 'update_password'): ?>
	<script>
            bootbox.alert("Success! Password has been send email id.", function() {
                console.log("Alert Callback");
            });
    </script>
<?php endif; if ($_SESSION['MESSAGE'] === 'notupdate_password'): ?>
	<script>
            bootbox.alert("You Entered Wrong Email-id!", function() {
                console.log("Alert Callback");
            });
    </script>
<?php endif; if ($_SESSION['MESSAGE'] === 'signup_not'): ?>
	<script>
            bootbox.alert("This Email id is already exist!", function() {
                console.log("Alert Callback");
            });
    </script>
<?php endif; if ($_SESSION['MESSAGE'] === 'sign_success'): ?>
	<script>
            bootbox.alert("Signup successfully! Check your email to login proceed.", function() {
                console.log("Alert Callback");
            });
    </script>	
<?php endif; unset($_SESSION['MESSAGE']);	endif;?>
<div id="banner">
<?php foreach($list1 as $detail1){?>
<img src="<?php echo base_url()."assets/images/".$detail1->image; ?>">
<div class="slider-content">
<div class="wrapper">
<h2><?php echo $detail1->heading; ?></h2>
<?php  $u_id=$this->session->userdata('u_id');  if(!empty($u_id)): ?>
<div class="for-sale">
<ul>
<li><a href="<?php echo base_url()."sales"; ?>">FOR SALE</a></li>
<form action="<?php echo base_url()."rentals"; ?>" method="post" id="rent">
<input type="hidden" name="rental" value="1" >
<li><a href="" onclick="document.getElementById('rent').submit(); return false;">RENTALS</a></li>
</form>
<!--<li><a href="">SOLDS</a></li>-->
</ul>
</div>
<?php endif; ?>
<p><?php echo $detail1->content; ?></p>
<?php } ?>

<?php if(!empty($u_id)): ?>

<form <?php $base=base_url(); $request_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; if($request_url==$base){?>
action="<?php echo base_url()."home/all_search"; ?>" 
<?php }elseif($request_url==base_url()."rentals"){ ?> action="<?php echo base_url()."home/rental_search"; ?>"
<?php }elseif($request_url==base_url()."sales"){ ?> action="<?php echo base_url()."home/sale_search"; ?>" <?php } ?> id="my_form" method="get" >
<div class="search-location">
<ul>
<li>
        <select data-placeholder="SELECT LOCATION" name="location[]" style="width:235px;" multiple class="chosen-select" tabindex="8">

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
<option value="max">BEDS</option>
<option value="1">1 Bedroom</option>
<option value="2">2 Bedrooms</option>
<option value="3">3 Bedrooms</option>
<option value="4">4 Or more</option>
        </select>
        </span></li>
<li><span class="custom-select">
<select name="baths">
<option value="max">BATHS</option>
<option value="1">1 Bathroom</option>
<option value="2">2 Bathrooms</option>
<option value="3">3 Bathrooms</option>
<option value="4">4 Or More</option>
        </select>
        </span></li>		
<li><a href="javascript:{}" onclick="document.getElementById('my_form').submit(); return false;" class="search-buttan" style="padding: 15px 50px !important;"><i class="fa fa-search" ></i>SEARCH</a></li>
<li id="lbxf-btn" class="list-box1"><span class="search-buttan2" onclick="initialize()"><i class="fa fa-plus"></i>ALL FILTERS</span></li>
</ul>
</div>
</form>
<?php else:  ?>

<form action="<?php echo base_url()."Sign/sign_in"?>" method="post" id="reg_form">
<div class="sign-location">
<ul>
<li>
		<div class="input-box">
			<input type="text" placeholder="Your Name :" id="n" name="name" onblur="this.placeholder = 'Name : '" onfocus="this.placeholder = ''" autocomplete="off" required>
          </div>
 <li>	<div class="input-box">
          <input type="email" placeholder="Your Email :" id="es" name="email" onblur="this.placeholder = 'Email :'" onfocus="this.placeholder = ''" autocomplete="off">
          </div></li> 
<li><span class="custom-select">
<select name="usertype">
<option value="">User Type</option>
<option value="2"> Agent </option>
<option value="3"> User </option>
        </select>
        </span></li>		  
<li><a href="javascript:{}" onclick="document.getElementById('reg_form').submit();  return false;" class="search-buttan" style="padding: 15px 50px !important;">Sign-Up</a></li>
</ul>
</div>
</form>
<?php endif; ?>

</div>
</div>
</div>
<div class="wrapper">
<form action="<?php echo base_url()."home/advanced_search"; ?>" id="my_form2" method="get" >
<div class="advanced-options">
<div class="advanced-top"><strong><i class="fa fa-plus"></i>ADVANCED OPTIONS</strong><span id="close"><i class="fa fa-times"></i>CLOSE</span></div>
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
<!--<div id="info">
</div>-->
<!--<input type="hidden" id="info" name="lat_log" value="" /> -->
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
<div class="ad_block"><span>Ad Space</span></div>
<div class="favorite-neighborhoods">
<h2>FAVORITE NEIGHBORHOODS</h2>
<div id="slider1">
<ul><?php $i=1; ?>
<?php foreach($favorite as $favlist){ ?>
<li><a href="<?php echo base_url()."home/detail/".base64_encode($favlist->id); ?>" target="_blank"><img src="<?php echo base_url()."assets/property_images/".$favlist->feature_image; ?>" width="380" height="381"><div class="new-listings"><span><small><?php echo $favlist->bedroom; ?>Bed/<?php echo $favlist->bathroom; ?> Bath</small><br>
<?php $loc=$favlist->location; $arr=explode(",",$loc); echo $arr[0];?></span><strong>$<?php echo $favlist->price1; ?></strong></div></a></li>
<?php if($i%3==0){?>
	</ul><ul>
<?php }$i++; } ?>
</ul>
</div>
</div>
<div class="favorite-neighborhoods favorite-neighborhoods2">
<h2>NEW LISTINGS (<?php echo count($new); ?>)</h2>
<div id="slider2">
<ul><?php $i=1; ?>
<?php foreach($new as $newlist){ ?>
<li><a href="<?php echo base_url()."home/detail/".base64_encode($newlist->id); ?>" target="_blank"><img src="<?php echo base_url()."assets/property_images/".$newlist->feature_image; ?>" width="380" height="381"><div class="new-listings"><span><small><?php echo $newlist->bedroom; ?>Bed/<?php echo $newlist->bathroom; ?> Bath</small><br>
<?php $loc=$newlist->location; $arr=explode(",",$loc); echo $arr[0];?></span><strong>$<?php echo $newlist->price1; ?></strong></div></a></li>
<?php if($i%3==0){?>
	</ul><ul>
<?php }$i++; } ?>
</ul>
</div>
</div>
<div class="favorite-neighborhoods favorite-neighborhoods2">
<h2>FEATURED LISTINGS (<?php echo count($featured); ?>)</h2>
<div id="slider3">
<ul><?php $i=1; ?>
<?php foreach($featured as $featurelist){ ?>
<li><a href="<?php echo base_url()."home/detail/".base64_encode($featurelist->id); ?>" target="_blank"><img src="<?php echo base_url()."assets/property_images/".$featurelist->feature_image; ?>" width="380" height="381"><div class="new-listings"><span><small><?php echo $featurelist->bedroom; ?>Bed/<?php echo $featurelist->bathroom; ?> Bath</small><br>
<?php $loc=$featurelist->location; $arr=explode(",",$loc); echo $arr[0];?></span><strong>$<?php echo $featurelist->price1; ?></strong></div></a></li>
<?php if($i%3==0){?>
	</ul><ul>
<?php }$i++; } ?>
</ul>
</div>
</div>
<div class="favorite-neighborhoods">
<h2>&nbsp;</h2>
<div id="slider4">
<?php foreach($explore as $explore_list){?>
<ul>
<li>
<div class="explore-other">
<img src="<?php echo base_url()."assets/images/".$explore_list->image; ?>" width="755" height="379">
<strong><?php echo $explore_list->heading; ?></strong>
<p><?php echo $explore_list->content; ?><a href="<?php echo base_url()."home/property_listing?type=all"; ?>" class="start-exploring">START EXPLORING</a></p>
</div></li>
<li><div class="add_box-exploring">AD SPACE</div></li>
</ul>
<?php } ?>
</div>
</div>
</div>

<link href="<?php echo base_url() ?>assets/fronted/css/multicheck.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>assets/fronted/js/multiple.js" type="text/javascript"></script>
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

<script>
setTimeout(function() {
$('.bootbox').delay(2000).slideUp('slow');
    });
</script>

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
    htmlStr += myPolygon.getPath().getAt(i).toUrlValue(5) + ",";
    //Use this one instead if you want to get rid of the wrap > new google.maps.LatLng(),
    //htmlStr += "" + myPolygon.getPath().getAt(i).toUrlValue(5) + "<br>";
	//document.getElementById('info').value = htmlStr;
  }
  
}
    </script>
	
	