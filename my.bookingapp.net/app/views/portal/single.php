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
		<a class="navbar-brand" href="/portal">Booking app | DEMO PORTAL</a>
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

 
<div class="container">
	
	<!-- breadcrumbs-->	
	<div class="row">
		<div class="col-xs-9 col-sm-9 col-md9 col-lg-9">
			<ol class="breadcrumb">
			  <li><a href="/portal">Početna</a></li> 
			  <li class="active"><a href="/portal/view/<?php echo $data['row'][0]->apartment_id;?>"><?php echo $data['row'][0]->name;?></a></li>
			</ol>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
			 <a class="btn btn-lg btn-block btn-success" href="" title="">Rezerviraj</a> 
		</div>
	
	</div>
	<!-- /breadcrumbs-->	

	<div class="row">
		<!-- Left side wrapper col  -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	 
	 
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4><i class="icon-search"></i> Pretraga</h4>
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



				<div class="panel panel-primary">
				
					<div class="panel-body">
									
					<h4>Moglo bi vas zanimati i:</h4>
					<hr class="hr-sm">



                	<?php if($data['latest_apartments']){

                    	foreach ($data['latest_apartments'] as $row) {
                    	 

							echo "	<!-- RELATED ITEM -->
							<div class='alert' style='position:relative'>	
								
								<div class='row'>
									<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
										<div class='thumbnail'><img class='img-responsive' src='";
							echo DIR; 
							echo "$row->img' alt=''></div>
									</div>
									<div class='col-xs-7 col-sm-7 col-md-7 col-lg-7'>
										<a href='$row->apartment_id' title=''>$row->name</a>
									</div>
								</div>
							</div>
							<!-- RELATED ITEM -->";
					    }

                  	}

                  ?>
					  
					</div>
				</div>
			</div><!-- / left side -->

		
	
		<!-- Right side wrapper col-->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<h2><?php echo $data['row'][0]->name;?></h2>
					<small><?php echo $data['row'][0]->description;?> </small>
					<h4> 

					<?php 
						if($data['row'][0]->phone) {
							echo "Kontakt broj: ";
							echo $data['row'][0]->phone;
						}
					?> </h4>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
					<a class="btn btn-info btn-block btn-lg toggler" href="#" style="margin:30px 0px 10px 0px;"> <i class="fa fa-map-marker"></i> Prikaži kartu </a> <a class="btn btn-info btn-lg btn-block toggler-hide" href="#" style="margin:30px 0px 10px 0px;"><i class="fa fa-map-marker"></i> Sakrij kartu </a>
				</div>
				
			</div>
			
				<hr class="hr-sm">
			
				<div class="block-wrapper">
 				<!-- GMAP-->
			
				<div id="map" class="gmappanel hide-map"></div>
				
				<!-- GMAP-->
		        <!-- SLIDER -->
		
					 <div class="flexslider">
					  <ul class="slides">
							<li data-thumb="<?php echo DIR . $data['row'][0]->img;?>">
								<img src="<?php echo DIR . $data['row'][0]->img;?>" />
							</li>
							<li data-thumb="<?php echo DIR . $data['row'][0]->img_1;?>">
								<img src="<?php echo DIR . $data['row'][0]->img_1;?>" />
							</li>
							<li data-thumb="<?php echo DIR . $data['row'][0]->img_2;?>">
								<img src="<?php echo DIR . $data['row'][0]->img_2;?>" />
							</li> 
					  </ul>
					</div>
	
				<!-- /SLIDER -->
					

			</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p>Više o objektu </p>
						<hr>
						
						<!-- DESCRIPTION TABS-->
						<ul id="myTab" class="nav nav-tabs">
 						    <li class=""><a href="#description" data-toggle="tab">Detaljnije</a></li>
 							<li class=""><a href="#long_description" data-toggle="tab">Opis</a></li> 
							<li class=""><a href="#ublizini" data-toggle="tab">U blizini</a></li>
							<li class=""><a href="#istaknuto" data-toggle="tab">Istaknuti apartmani</a></li>
						 
						  </ul>
						  
						  <div id="myTabContent" class="tab-content">
						     <div class="tab-pane fade in active" id="description">  
                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Broj ležaja: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->broj_lezaja;?> </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Broj zvijezdica: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->broj_zvijezdica;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u predsezoni: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_predsezona_od;?> - <?php echo $data['row'][0]->cijena_predsezona_do;?>  € </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>
 
                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u sezoni: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_sezona_od;?> - <?php echo $data['row'][0]->cijena_sezona_do;?> €</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>
 



                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u posezoni: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_posezona_od;?> - <?php echo $data['row'][0]->cijena_posezona_do;?> €</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

 


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Klima: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->klima;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>SAT TV: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->sat_tv;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>
                                            

                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>WIFI: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->wifi;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Parking: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->parking;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Udaljenost od plaže: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->udaljenost_plaza;?>  m</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>




                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Udaljenost od centra: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->udaljenost_centar;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>



                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Udaljenost od trgovine: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->udaljenost_trgovina;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>
                                            



                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Terasa: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->terasa;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>




                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Pogled na more: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->pogled_more;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="divider"></div>
                                            </div>

						     </div>

							<div class="tab-pane fade" id="long_description">
							  <?php echo $data['row'][0]->long_description;?> 
							</div>
							<div class="tab-pane fade" id="ublizini">
							  
							</div>
							<div class="tab-pane fade" id="istaknuto">
							  

								<?php if($data['featured_apartments']){
		                		
				                    	foreach ($data['featured_apartments'] as $row) {
				                    	 

											echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
											<div class='thumbnail'>
											<img class='img-responsive' src='";
											echo DIR; 
											echo "$row->img' alt='$row->name'> 
											<div class='caption alt'><p class='lead'>$row->name</p></div>
											<div class='caption'>
												<!--<h4><a href='#' title=''>Cres</a></h4>
												<p>Hrvatska</p>
												<p>-->
													<a class='btn btn-default btn-sm btn-block' href='/portal/view/$row->apartment_id' title='$row->id'><i class='icon-building'></i> Pogledaj</a>
												</p>
											</div>
										
										</div>
										
									</div>";
									    }

				                  	}

				                  ?>


							</div>
							 
						  </div>
						<!-- / DESCRIPTION TABS-->
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<div class="social-sharing-box">

						<p>
                          <a href="#" class="csbuttons" data-type="facebook"><img src="http://my.bookingapp.net/img/fb.png" alt=""></a>
                          <a href="#" class="csbuttons" data-type="twitter" data-txt="<?php echo $data['row'][0]->name;?>" data-via="hpnikola"><img src="http://my.bookingapp.net/img/tw.png" alt=""></a>
                          <a href="#" class="csbuttons" data-type="google" data-lang="fr"><img src="http://my.bookingapp.net/img/gp.png" alt=""></a>
                          <a href="#" class="csbuttons" data-type="linkedin"><img src="http://beta.mycity-hub.com/img/in.png" alt=""></a> 
                        </p>

 
						</div>
					</div>
				</div>
		</div>
		<!-- /Right side wrapper col-->
	</div>
	<!-- / .row -->
</div>


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
							  <a class="btn btn-info">Prijava</a>
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