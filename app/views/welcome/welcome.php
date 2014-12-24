 <div id="front-page-wrapper">
<!-- begin template -->
<div class="navbar navbar-custom navbar-fixed-top">
 <div class="navbar-header"><a class="navbar-brand" href="/admin">Admin</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse">
 
    </div>
</div>

<div id="map-canvas"></div>
<div class="container-fluid apartments-frontpage" id="main">
  <div class="row">
  	<div class="col-md-6 show-apartments">
   

   		<div class="row">

   			<div class="row">
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-1.jpg" />
   						<h4>Apartmani Petra</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-2.jpg" />
   						<h4>Apartmani Maja</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-1.jpg" />
   						<h4>Apartmani Josipa</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-2.jpg" />
   						<h4>Apartmani Antea</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-1.jpg" />
   						<h4>Apartmani Matea</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-2.jpg" />
   						<h4>Apartmani Gabrijela</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-1.jpg" />
   						<h4>Museum Citycenter Apartment 110 m2</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   				<div class="col-md-5 col-xs-5 apartment-single">
   						<img src="<?php echo url::get_template_path();?>img/apartman-2.jpg" />
   						<h4>Museum Citycenter Apartment 110 m2</h4>
   						<h5>Entire home/apt · 4 reviews · Oud-Zuid, Amsterdam</h5>
   				</div>
   			</div>

   		</div>
     

    </div>
    <div class="col-md-6 col-xs-12"><!--map-canvas will be postioned here--></div>
    
  </div>
</div>
<!-- end template -->
</div>
	<!-- script references -->
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="<?php echo url::get_template_path();?>js/map-location-frontpage.js"></script>