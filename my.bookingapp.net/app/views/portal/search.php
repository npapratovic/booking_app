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
		<a class="navbar-brand" href="/">Booking app | DEMO PORTAL</a>
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
 
	<!-- Main blog .container -->
 <div class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<ol class="breadcrumb">
			  <li><a href="/">Početna</a></li>
 			 <li class="active"> Rezultati pretrage</li> 
			</ol>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

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

	 
			<div class="row margin-top-10">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Top ponuda </h3>
						</div>
							<div class="thumbnail">
								<a href="/portal/search/type-all/cres" style="color: #ffffff;"><img class="img-responsive" src="/img/beach_9.jpg" alt="Pretraži smještaj za grad Cres"></a>
									<div class="caption alt">
										<p class="lead"><a href="/portal/search/type-all/cres" style="color: #ffffff;">Cres</a></p>
										</div>
							</div>
					</div>
				</div>
			</div>
			<hr class="hr-sm">	 
 
					
					
 		</div>
	<!-- /Main blocks left side -->
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 gradient-bg">
			<!-- ADDS PANEL-->
							  
		 
				<div class="row margin-top-10">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">

 
								<?php 

									if($data['apartments_by_type']) {
								
									$str = $data['apartments_by_type']['0']->typename;
									$str = strtolower($str); 
									echo '<h3>Pretraga smještaja po tipu: ' . $str . '</h3>'; 
									
									} 
								 
							  
							    
							   		else if($data['apartments_by_city']) {
								
									echo '<h3>Pretraga smještaja za mjesto: ' . $data['apartments_by_city']['0']->cityname . '</h3>'; 
									
									} 
								  
							  
							  
							   	 	else if($data['apartments_by_city_and_type']) {
										'Pretraga: ' . $typename . ' u ' .  $cityname;
											echo '<h3>Pretraga: ' . $data['apartments_by_city_and_type']['0']->typename .', '. $data['apartments_by_city_and_type']['0']->cityname . '</h3>'; 
									
									} 

									else {
										echo "Nema niti jedan rezultat, pokušajte sa nekim drugim kriterijima";
									}

							  
								 ?>
						</div>
					</div>
				</div>
			</div>
			<hr class="hr-sm">
							



 
				<?php if($data['apartments_by_type']){
                		
                    	foreach ($data['apartments_by_type'] as $row) {
                    	echo "<div class='panel panel-primary hov-action-border'>
								<div class='panel-body'>
									<div class='row'>";

						echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
								<div class='thumbnail'>
									<img class='img-responsive' src='";
						echo DIR; 
						echo "$row->img' alt='$row->name'> 
 							<div class='caption'>
								 <h4><a href='/portal/search/type-all/$row->cityslug' title=''>$row->cityname</a></h4>
								 <h5><a href='/portal/search/city-all/$row->typeslug' title=''>$row->typename</a></h5>

								<p>Hrvatska</p>
								<p> 
									<a class='btn btn-default btn-sm btn-block' href='/portal/view/$row->apartment_id' title='$row->id'><i class='icon-building'></i> Pogledaj</a>
								</p>
							</div>
						
						</div>
						
					</div>";
					echo "<div class='col-xs-12 col-sm-12 col-md-9 col-lg-9'>

					<h3>$row->name</h3>
					$row->description

					</div>";
					echo "</div></div></div>";
					    }

                  	}
                  	 
              
 			  		   if($data['apartments_by_city']){
                		
                    	foreach ($data['apartments_by_city'] as $row) {
                    	echo "<div class='panel panel-primary hov-action-border'>
								<div class='panel-body'>
									<div class='row'>";

						echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
								<div class='thumbnail'>
									<img class='img-responsive' src='";
						echo DIR; 
						echo "$row->img' alt='$row->name'> 
 							<div class='caption'>
								 <h4><a href='/portal/search/type-all/$row->cityslug' title=''>$row->cityname</a></h4>
								 <h5><a href='/portal/search/city-all/$row->typeslug' title=''>$row->typename</a></h5>					<p>Hrvatska</p>
								<p> 
									<a class='btn btn-default btn-sm btn-block' href='/portal/view/$row->apartment_id' title='$row->id'><i class='icon-building'></i> Pogledaj</a>
								</p>
							</div>
						
						</div>
						
					</div>";
					echo "<div class='col-xs-12 col-sm-12 col-md-9 col-lg-9'>

					<h3>$row->name</h3>
					$row->description

					</div>";
					echo "</div></div></div>";
					    }

                  	}

              		 
					 
					
					 
 				 	   if($data['apartments_by_city_and_type']){
                		
                    	foreach ($data['apartments_by_city_and_type'] as $row) {
                    	echo "<div class='panel panel-primary hov-action-border'>
								<div class='panel-body'>
									<div class='row'>";

						echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
								<div class='thumbnail'>
									<img class='img-responsive' src='";
						echo DIR; 
						echo "$row->img' alt='$row->name'> 
 							<div class='caption'>
								 <h4><a href='/portal/search/type-all/$row->cityslug' title=''>$row->cityname</a></h4>
								 <h5><a href='/portal/search/city-all/$row->typeslug' title=''>$row->typename</a></h5>			
								 <p>Hrvatska</p>
								<p> 
									<a class='btn btn-default btn-sm btn-block' href='/portal/view/$row->apartment_id' title='$row->id'><i class='icon-building'></i> Pogledaj</a>
								</p>
							</div>
						
						</div>
						
					</div>";
					echo "<div class='col-xs-12 col-sm-12 col-md-9 col-lg-9'>

					<h3>$row->name</h3>
					$row->description

					</div>";
					echo "</div></div></div>";
					    }

                  	}

                    

                   ?>
					 
					
					 
					 
					
		
		
		 
		<!-- Pagination  
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<ul class="pagination pull-right">
			  <li class="disabled"><a href="#">Previous</a></li>
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">Next</a></li>
			</ul>
		</div>
	    /Pagination -->
					
					
					
					
						
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

											if($data['cities_all']) {
												foreach ($data['cities_all'] as $row) {
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