   </div>
 
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(".sidebar").toggleClass("toggled");
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

</body>
</html>
