 $(document).ready(function(e) {
   

    $('.menu-toggle').click(function(){
	  $('.main-menu').slideToggle(); 
	 });

  $('.search-buttan2').click(function(e){
	 $('.advanced-options').slideDown(); 
	 });
  $('#close').click(function(e){
	 $('.advanced-options').slideUp(); 
	 });
	 
	 
	 $('.login').click(function(){
	  $('.login-box, .overly').slideDown();
	});
	 $('.overly').click(function(){
	  $('.login-box, .overly').slideUp();
	});
	 
	 $('.signup').click(function(){
	  $('.login-box2, .overly').slideDown();
	});
	 $('.overly').click(function(){
	  $('.login-box2, .overly').slideUp();
	});
	
	$('.sign1').click(function(){
	  $('.login-box').slideUp();
	  $('.login-box2').slideDown();
	});
	$('.log1').click(function(){
	  $('.login-box2').slideUp();
	  $('.login-box').slideDown();
	});
	
	$('.forget').click(function(){
	  $('.login-box').slideUp();
	  $('.forgot-password').slideDown();
	});
	$('.overly').click(function(){
	  $('.forgot-password,.contact-box').slideUp();
	});
	
	$('.contact').click(function(){
	  $('.contact-box, .overly').slideDown();
	});
	
	
    $('.refine_search ul li a').click(function() {
            if (!$(this).next().is(':visible')) {
                $('.detail').slideUp(400);
                $('ul li a').removeClass('active');
                $(this).next().slideDown(400);
                $(this).parent().addClass('active');
            }
            else {
                 $('.detail').slideUp(400);
                 $('ul li a').removeClass('active');
            }
            return false;
     });
$('input, textarea').placeholder({customClass:'my-placeholder'});


    $('#lbxf-btn').click(function(){
	 $('#lbxf-advanced-options').show();
	 $('#overlay').show();	
    });
   
	
	   $("#slider1").owlCarousel({
	  navigation : true,
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  singleItem:true,
	  pagination:true
    });
	
	$("#slider2").owlCarousel({
	  navigation : true,
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  singleItem:true,
	  pagination:true
    });
	
	$("#slider3").owlCarousel({
	  navigation : true,
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  singleItem:true,
	  pagination:true
    });
	$("#slider4").owlCarousel({
	  navigation : true,
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  singleItem:true,
	  pagination:true
    });
	
	
 $('.listing').click(function(){
	  $('.dishwasher').slideToggle(); 
	 });
	 
	  $('.listing2').click(function(){
	  $('.dishwasher2').slideToggle(); 
	 });
	 	
	
	
}); 	


