<footer>
<?php $detail=$this->Site_setting_model->site_detail(); foreach($detail as $list){?>
<div class="wrapper">
<div class="social_block">
<ul>
<li><a target="_blank" href="<?php echo $list->facebook; ?>"><img src="<?php echo base_url() ?>assets/fronted/images/social_icn1.png" alt="" /></a></li>
<li><a target="_blank" href="<?php echo $list->twitter; ?>"><img src="<?php echo base_url() ?>assets/fronted/images/social_icn2.png" alt="" /></a></li>
<li><a target="_blank" href="<?php echo $list->google; ?>"><img src="<?php echo base_url() ?>assets/fronted/images/social_icn3.png" alt="" /></a></li>
</ul>
</div>
<div class="footer_menu">
<ul>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms &amp; Conditions </a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
<div class="copyright_content">
<small><?php echo $list->copyright; ?></small>

</div>

</div>
<?php } ?>
</footer>
<script src="<?php echo base_url() ?>assets/fronted/js/SpryTabbedPanels.js" type="text/javascript"></script>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".custom-select").each(function(){
            $(this).wrap("<span class='select-wrapper'></span>");
            $(this).after("<span class='holder'></span>");
        });
        $(".custom-select").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');
    })
</script>      

<script type="text/javascript">
		jQuery(document).ready(function(){
		$(".toggle").click(function(){
  $("nav").slideToggle('slow');
});
		
		});
		</script>
        
 <script>
 $('.custom-check').click(function(){
  $('.custom-check').removeClass('selected') 
  $(this).addClass('selected')
 });
</script>       
</body>
</html>
