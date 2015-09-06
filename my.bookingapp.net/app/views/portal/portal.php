  <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">Bookin appp | DEMO PORTAL</a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
		   <li><a href="/admin/login">Prijava</a></li>
		  <li><a href="/register">Registracija</a></li>
 
		 
		</ul>
		<ul class="nav navbar-nav navbar-right">
	 
			<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
  			
		</ul>
		
	</div><!-- /.navbar-collapse --> 
	</div>
</nav>

 

    <!-- Carousel
    ================================================== -->
  <div id="carousel_fade" class="carousel slide carousel-fade">
     
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img  src="img/1.jpg" alt="First slide">
          <div class="container hidden-xs">
           <div class="carousel-caption">
						<div class="row">
							<div class="col-xs-12 col-sm-5 col-sm-offset-7 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
								<h1>Najbolja ponuda!</h1>
									<p class="hidden-sm">Pronađite najpovoljnije cijene za svoje predstojeće putovanje</p>
									<p><a class="btn btn-large btn-primary" href="#">Pročitajte više</a></p>
							</div>
						</div>
				</div>
          </div>
        </div>
        <div class="item">
          <img  src="img/2.jpg"  alt="Second slide">
          <div class="container hidden-xs">
				<div class="carousel-caption ">
						<div class="row">
							<div class="col-xs-12 col-sm-5 col-sm-offset-7 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
								<h1>Tražite inspiraciju?</h1>
									<p class="hidden-sm">Uz našu pomoć pronađite savršen smještaj</p>
									<p><a class="btn btn-large btn-primary" href="#">Pročitajte više</a></p>
							</div>
						</div>
				</div>
				
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel_fade" data-slide="prev"><span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#carousel_fade" data-slide="next"><span class="icon-next"></span></a>
	  <div class="frm-wrapper">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4><i class="icon-search"></i>Pretraga</h4>
							</div>
							<div class="panel-body">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<form class="" role="form">
										<fieldset>
											<div class="form-group">
											  <label for="tip-smjestaja">Tip smještaja</label>
											  <select name="myList" id="ddlMyList" class="form-control">
												<option value="" selected="selected"> - Odaberi tip smještaja  - </option>
													<option value="apartman">Apartman</option>
													<option value="hotel">Hotel</option>
													<option value="hostel">Hostel</option>
													<option value="galerija">Galerija</option>
													<option value="soba">Soba</option>
													<option value="studio">Studio</option>
	  												<option value="kuca-za-odmor">Kuća za odmor</option>
											  </select> 
											</div>
											<div class="form-group">
											  <label for="mjesto">Mjesto</label>
											 	 <select name="myList2" id="ddlMyList2" class="form-control">
													<option value="" selected="selected"> - Odaberi mjesto - </option> 
														<option value="beli">Beli</option>
														<option value="cres">Cres</option>
		 												<option value="martinscica">Martinšćica</option>
														<option value="valun">Valun</option>
														<option value="orlec">Orlec</option>
														<option value="vrana">Vrana </option>
														<option value="stivan">Stivan </option>
														<option value="belej">Belej  </option>
		 												<option value="osor">Osor  </option>
														<option value="punta-kriza">Punta Križa  </option>
														<option value="mali-losinj">Mali Lošinj  </option>
														<option value="veli-losinj">Veli Lošinj  </option>
														<option value="nerezine">Nerezine  </option>
														<option value="cunski">Ćunski  </option>
												</select> 
											</div>
									  
											<input type="button" value="Pretraži" onclick="NavigateToSite()" />

											<script type="text/javascript">
												
												function NavigateToSite(){
											    var ddl = document.getElementById("ddlMyList");
												var ddl2 = document.getElementById("ddlMyList2");


											    if (ddl.value.length == 0 && ddl2.value.length == 0) {
													 var selectedVal = "http://my.bookingapp.net/portal/search/";
												}	

												else if (ddl.value.length == 0) {
													 var selectedVal = "http://my.bookingapp.net/portal/search/type-all/"  + ddl2.options[ddl2.selectedIndex].value;
												}

												else if (ddl2.value.length == 0) {
													 var selectedVal = "http://my.bookingapp.net/portal/search/city-all/"  + ddl.options[ddl.selectedIndex].value;
												} 

												else {
													 var selectedVal = "http://my.bookingapp.net/portal/search/" + ddl.options[ddl.selectedIndex].value + "/" + ddl2.options[ddl2.selectedIndex].value;
												}
 
											    window.location = selectedVal;
											}
											</script>
 									  </fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>
				</div>
    </div>
	<!-- /.carousel -->
	<!-- Main blog .container -->
		<!--map -->
		<div class="row"> 
		 
				 

			<div id="map_canvas"></div>	
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


			  <script>
			    // Define your locations: HTML content for the info window, latitude, longitude
					<?php   if($data['latest_apartments_for_map']){
				            echo "var locations = [";    		
				        	foreach ($data['latest_apartments_for_map'] as $row) {  
								echo "['";
								echo $row->name;
								echo "<br /><br /><a href=/portal/view/";
								echo $row->apartment_id;
								echo ">Pogledaj</a>";
								echo "', ";
								echo $row->lon;
								echo ",";
								echo $row->lat;
								echo "],"; 
						    }

				 		    echo "];";

				      	}
						 
				  	?>
			    
			    // Setup the different icons and shadows
			    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
			    
			    var icons = [
			      iconURLPrefix + 'red-dot.png',
			      iconURLPrefix + 'green-dot.png',
			      iconURLPrefix + 'blue-dot.png',
			      iconURLPrefix + 'orange-dot.png',
			      iconURLPrefix + 'purple-dot.png',
			      iconURLPrefix + 'pink-dot.png',      
			      iconURLPrefix + 'yellow-dot.png'
			    ]
			    var iconsLength = icons.length;

			    var map = new google.maps.Map(document.getElementById('map_canvas'), {
			      zoom: 10,
			      center: new google.maps.LatLng(-37.92, 151.25),
			      mapTypeId: google.maps.MapTypeId.ROADMAP,
			      mapTypeControl: false,
			      streetViewControl: false,
			      panControl: false,
			      zoomControlOptions: {
			         position: google.maps.ControlPosition.LEFT_BOTTOM
			      }
			    });

			    var infowindow = new google.maps.InfoWindow({
			      maxWidth: 160
			    });

			    var markers = new Array();
			    
			    var iconCounter = 0;
			    
			    // Add the markers and infowindows to the map
			    for (var i = 0; i < locations.length; i++) {  
			      var marker = new google.maps.Marker({
			        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			        map: map,
			        icon: icons[iconCounter]
			      });

			      markers.push(marker);

			      google.maps.event.addListener(marker, 'click', (function(marker, i) {
			        return function() {
			          infowindow.setContent(locations[i][0]);
			          infowindow.open(map, marker);
			        }
			      })(marker, i));
			      
			      iconCounter++;
			      // We only have a limited number of possible icon colors, so we may have to restart the counter
			      if(iconCounter >= iconsLength) {
			      	iconCounter = 0;
			      }
			    }

			    function autoCenter() {
			      //  Create a new viewpoint bound
			      var bounds = new google.maps.LatLngBounds();
			      //  Go through each...
			      for (var i = 0; i < markers.length; i++) {  
							bounds.extend(markers[i].position);
			      }
			      //  Fit these bounds to the map
			      map.fitBounds(bounds);
			    }
			    autoCenter();
			  </script> 


 
	 	 
 		</div>

	<div class="container">


		<div class="row">
			 <div class="col-xs-12"> 
				<div class="panel panel-default margin-top-10">
					<div class="panel-heading">
						<h3>Zadnje dodano</h3>
					</div>
				</div>

			 	<div class="row margin-top-20">

			 	<div class="col-md-12">



                	<?php if($data['latest_apartments']){
                		
                    	foreach ($data['latest_apartments'] as $row) {
                    	 

							echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
						<div class='thumbnail'>
							<img class='img-responsive' src='";
							echo DIR; 
							echo "$row->img' alt='$row->name'> 
							<div class='caption alt'><p class='lead'>$row->name</p></div>
							<div class='caption'>
								<!--<h4><a href='#' title=''>Booking</a></h4>
								<p>Hrvatska</p>
								<p>-->
									<a class='btn btn-default btn-sm btn-block' href='portal/view/$row->apartment_id' title='$row->id'><i class='icon-building'></i> Pogledaj</a>
								</p>
							</div>
						
						</div>
						
					</div>";
					    }

                  	}

                  ?>

  
				</div>
			</div>
		</div>


		<div class="row">
	<!-- Main blocks right side wrapper col  -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h3>Izdvojena ponuda</h3>
							</div>
						</div>
						<div class="row margin-top-10">
 				




		                	<?php if($data['featured_apartments']){
		                		
		                    	foreach ($data['featured_apartments'] as $row) {
		                    	 

									echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
									<div class='thumbnail'>
									<img class='img-responsive' src='";
									echo DIR; 
									echo "$row->img' alt='$row->name'> 
									<div class='caption alt'><p class='lead'>$row->name</p></div>
									<div class='caption'>
										<!--<h4><a href='#' title=''>Cres</a></h4>
										<p>Hrvatska</p>
										<p>-->
											<a class='btn btn-default btn-sm btn-block' href='portal/view/$row->apartment_id' title='$row->id'><i class='icon-building'></i> Pogledaj</a>
										</p>
									</div>
								
								</div>
								
							</div>";
							    }

		                  	}

		                  ?>
		 
							 
					</div>

					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_1.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/cres" title="">Cres</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/cres" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/cres" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/cres" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/cres" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/cres" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/cres" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/cres" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/cres" title="Pregledaj ponudu smještaja za Cres" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					
					
					
					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_2.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/mali-losinj" title="">Mali Lošinj</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/mali-losinj" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/mali-losinj" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/mali-losinj" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/mali-losinj" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/mali-losinj" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/mali-losinj" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/mali-losinj" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/mali-losinj" title="Pregledaj ponudu smještaja za Mali Lošinj" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					

					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_3.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/veli-losinj" title="">Veli Lošinj</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/veli-losinj" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/veli-losinj" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/veli-losinj" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/veli-losinj" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/veli-losinj" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/veli-losinj" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/veli-losinj" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/veli-losinj" title="Pregledaj ponudu smještaja za Veli Lošinj" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					


					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_4.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/beli" title="">Beli</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/beli" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/beli" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/beli" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/beli" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/beli" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/beli" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/beli" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/beli" title="Pregledaj ponudu smještaja za Beli" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					


					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_5.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/martinscica" title="">Martinšćica</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/martinscica" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/martinscica" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/martinscica" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/martinscica" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/martinscica" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/martinscica" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/martinscica" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/martinscica" title="Pregledaj ponudu smještaja za Martinšćica" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					


				    <!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_6.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/valun" title="">Valun</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/valun" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/valun" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/valun" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/valun" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/valun" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/valun" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/valun" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/valun" title="Pregledaj ponudu smještaja za Valun" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					


					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_7.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/orlec" title="">Orlec</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/orlec" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/orlec" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/orlec" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/orlec" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/orlec" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/orlec" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/orlec" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/orlec" title="Pregledaj ponudu smještaja za Orlec" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					
					  
					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_8.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/vrana" title="">Vrana</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/vrana" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/vrana" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/vrana" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/vrana" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/vrana" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/vrana" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/vrana" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/vrana" title="Pregledaj ponudu smještaja za Vrana" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					
					  
					 					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_1.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/stivan" title="">Stivan</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/stivan" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/stivan" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/stivan" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/stivan" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/stivan" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/stivan" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/stivan" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/stivan" title="Pregledaj ponudu smještaja za Stivan" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					
					  
						<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="img/beach_2.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="/portal/search/type-all/belej" title="">Belej</a> <small>Hrvatska</small></h3>
							<ul class="list-inline">
								<li><a href="/portal/search/apartman/belej" title=""><!-- 228 --> Apartmani</a></li>
								<li><a href="/portal/search/hotel/belej" title=""><!-- 228 --> Hoteli</a></li>
								<li><a href="/portal/search/hostel/belej" title=""><!-- 228 --> Hosteli</a></li>
								<li><a href="/portal/search/galerija/belej" title=""><!-- 228 --> Galerije</a></li>
								<li><a href="/portal/search/soba/belej" title=""><!-- 228 --> Sobe</a></li>
								<li><a href="/portal/search/studio/belej" title=""><!-- 228 --> Studio</a></li>
								<li><a href="/portal/search/kuce-za-odmor/belej" title=""><!-- 228 --> Kuće za odmor</a></li> 
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="/portal/search/type-all/belej" title="Pregledaj ponudu smještaja za Belej" style="margin-top:20px;"><i class="fa fa-chevron-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
					
					  
					 					 
					
					<!-- / ITEMS-->
		</div>
	<!-- /Main blocks left side -->
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 gradient-bg" >
		 
						
							<div class="panel panel-primary margin-top-10">
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
											<i class="fa fa-search fa-3x text-info"></i>
										</div>
										
										<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
											<p class="lead"> Pretražite ponudu! 
											</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<p><a class="btn btn-warning btn-sm margin-top-10" href="/portal/search/"><i class="fa fa-search"></i> Pretražite  </a></p>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row margin-top-10">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3>Top ponuda </h3>
										</div>
											<div class="thumbnail">
												<a href="/portal/search/type-all/cres" style="color: #ffffff;"><img class="img-responsive" src="img/beach_9.jpg" alt="Pretraži smještaj za grad Cres"></a>
													<div class="caption alt">
														<p class="lead"><a href="/portal/search/type-all/cres" style="color: #ffffff;">Cres</a></p>
 													</div>
											</div>
									</div>
								</div>
							</div>
							<hr class="hr-sm">
							
 


		                	<?php if($data['top_offer']){
		                		
		                    	foreach ($data['top_offer'] as $row) {
		                    	 echo "
							<!-- COUNTRY ITEM-->
							<div class='row margin-top-10'>
								<div class='col-xs-2 col-sm-4 col-md-4 col-lg-4'>
									<div class='thumbnail'><img class='img-responsive' src='" . DIR . "$row->img' alt='$row->name'></div>
								</div>
								<div class='col-xs-10 col-sm-8 col-md-8 col-lg-8'>
									<h4><a href='portal/view/$row->apartment_id' title='$row->name'>$row->name</a></h4>
									
										<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' style='padding-left:0px;'>
										<p class='text-warning'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i> 
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i> 
											<i class='fa fa-thumbs-up'></i> 
										</p>
										</div>
										<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
											<p class='lead text-info text-right'><small>od:</small> <strong>€ $row->cijena_predsezona</strong></p>
										</div>
									
									<p>$row->description</p>
								</div>
							</div>
							<!-- /COUNTRY ITEM-->";
							    }

		                  	}

		                  ?> 
							 
					
						
		</div>
	</div>
	<!-- /Main blog .container -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<hr>
</div>
<!-- /.container-->


<div class="container">
	
		<div class="panel panel-info">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center">
						<p class="lead ">
							<i class="icon-gift text-info"></i> Pretplatite se na naš email-newsletter i primajte najbolje ponude direktno na email!
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center">
						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email adresa</label>
								<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
							</div>
							  <button type="submit" class="btn btn-info">Prijava</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	<hr>
      <!-- Three columns of text below the carousel -->
      <div class="row">

         <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="fa fa-building fa-4x text-info"></i>
					  <h4>Hoteli</h4>
					  <p>Pretražite hotele iz naše ponude</p>
					  <p><a class="btn btn-info" href="/portal/search/city-all/hotel">Svi hoteli  &raquo;</a></p>
				</div>
			</div>
        </div><!-- /.col-lg-3 -->
		
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="fa fa-group fa-4x text-info"></i>
					  <h4>Apartmani</h4>
					  <p>Pretražite apartmane iz naše ponude</p>
					  <p><a class="btn btn-info" href="/portal/search/city-all/apartman">Svi apartmani  &raquo;</a></p>
				</div>
			</div>
		</div><!-- /.col-lg-3 -->
		
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="fa fa-ticket fa-4x text-info"></i>
					  <h4>Sobe</h4>
					  <p>Pretražite sobe iz naše ponude  </p>
					  <p><a class="btn btn-info" href="/portal/search/city-all/soba">Sve sobe &raquo;</a></p>
				</div>
			</div>
        </div><!-- /.col-lg-3 -->
		
		
		
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="fa fa-sun-o fa-4x text-info"></i>
					  <h4>Sobe</h4>
					  <p>Pretražite sve kuće za odmor iz naše ponude</p>
					  <p><a class="btn btn-info" href="/portal/search/city-all/kuce-za-odmor"> Sve kuće za odmor  &raquo;</a></p>
				</div>
			</div>
        </div><!-- /.col-lg-3 -->
       
	
		
      </div><!-- /.row -->
	<hr>
		<div class="row margin-top-10">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
										<ul class="list-inline text-sm">

										<?php 

											if($data['cities']) {
												foreach ($data['cities'] as $row) {
													echo "<li><a href='/portal/search/type-all/$row->slug' title='Pregledajte sav smještaj za $row->name'> $row->name </a></li>";
												}
											}

										?> 
												
												 
 											</ul>
			</div>
		</div>
	<hr>


     <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/admin/login">
                                Prijava
                            </a>
                        </li>
                        <li>
                            <a href="/register">
                                Registracija
                            </a>
                        </li>
                      
                    </ul>
                </nav>
                <div class="social-area pull-right">                
                    <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-social btn-pinterest btn-simple">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </div>
                <div class="copyright">
                    Sva prava zadržana &copy; bookingapp.net @2015 | Razvoj: <a href="http://bookingapp.net/"> Booking app</a> 
                </div>
            </div>
        </footer>