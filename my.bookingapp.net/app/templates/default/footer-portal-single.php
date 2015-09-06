   </div> <!-- end wrapper -->
  

	<!-- Bootstrap -->
	<script src="<?php echo url::get_template_path();?>js/jquery.min.js"></script>
	<script src="<?php echo url::get_template_path();?>js/jquery-ui-1.10.4.custom.min.js"></script>
 
    <script src="<?php echo url::get_template_path();?>js/bootstrap.min.js"></script>

      <script src="<?php echo url::get_template_path();?>js/holder.js"></script>
    <!-- Optional FlexSlider Additions -->
    <script src="<?php echo url::get_template_path();?>js/jquery.easing.js"></script>
    <script src="<?php echo url::get_template_path();?>js/jquery.mousewheel.js"></script>
    <script src="<?php echo url::get_template_path();?>js/jquery.flexslider-min.js"></script>
    <script src="<?php echo url::get_template_path();?>js/social-share-buttons.js"></script>

  <!-- FLEXSLIDER INIT SCRIPT-->
   <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!-- social sharingt script -->
    <script>
    $(document).ready(function(){
      $('.csbuttons').cSButtons({
        total : "#total",
        "url"   : "http://my.bookingapp.net/portal/view/<?php echo  $data['row'][0]->apartment_id;?>",
      });
    });
  </script>
    <!-- gMap PLUGIN -->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?php echo url::get_template_path();?>js/jquery.gmap.js"></script>
  <!-- INIT SCRIPT - show gMap onclick -->
  <script>
    
$(document).ready(function(){

$('.toggler').click(function(){
jQuery('.gmappanel').removeClass('hide-map').addClass('show-map').css('height', '600');
$('.toggler').css('display', 'none');
$('.toggler-hide').css('display', 'block');

    var $map = $('#map');
    google.maps.event.addDomListener(window, 'resize', function() {
      map.setCenter(homeLatlng);
    });
    if( $map.length ) {

      $map.gMap({ 
        zoom: 15,
        markers: [
        { 
          'latitude' : '<?php echo $data['row'][0]->lon;?>',
          'longitude'  : '<?php echo $data['row'][0]->lat;?>'
        }
        ]
      });

    }


});
$('.toggler-hide').click(function(){
jQuery('.gmappanel').removeClass('show-map').addClass('hide-map').css('height', '0');
$('.toggler').css('display', 'block');
$('.toggler-hide').css('display', 'none');
});
});

  </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28527143-9', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
