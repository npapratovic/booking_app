   </div> <!-- end wrapper -->
 
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(".nav-sidebar").toggleClass("toggled");
    });
    </script>

	<!-- Bootstrap -->
	<script src="<?php echo url::get_template_path();?>js/jquery.min.js"></script>
	<script src="<?php echo url::get_template_path();?>js/bootstrap.min.js"></script>

	<!-- Bootflat's JS files.-->
	<script src="<?php echo url::get_template_path();?>js/icheck.min.js"></script>
	<script src="<?php echo url::get_template_path();?>js/jquery.fs.selecter.min.js"></script>
	<script src="<?php echo url::get_template_path();?>js/jquery.fs.stepper.min.js"></script>


    <!-- DataTables JavaScript -->
    <script src="<?php echo url::get_template_path();?>js/jquery.dataTables.js"></script>
    <script src="<?php echo url::get_template_path();?>js/dataTables.bootstrap.js"></script>
	<!-- calendar -->

    <script src="<?php echo url::get_template_path();?>js/moment.min.js"></script> 
    <script src="<?php echo url::get_template_path();?>js/fullcalendar.min.js"></script>
    <script src="<?php echo url::get_template_path();?>js/lang-all.js"></script>

	<!-- bootstrap-select -->

    <script src="<?php echo url::get_template_path();?>js/bootstrap-select.js"></script> 
    <script src="<?php echo url::get_template_path();?>js/bootstrap-select.js.map"></script>
    <script src="<?php echo url::get_template_path();?>js/bootstrap-select.min.js"></script>

    <!-- google maps for add / edit apartment -->
 	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
 	<script src="<?php echo url::get_template_path();?>js/jquery-gmaps-latlon-picker.js"></script>
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
