  
  <?php // include ('includes/topbar-nav.php'); ?>
    

      <?php //include ('includes/sidebar-nav.php'); ?> 
  <div id="wrapper">    
      <?php include ('includes/top-sidebar-nav.php'); ?>

   <div id="page-wrapper" >
      <div class="container-fluid"> 

                <div class="row"> 
                   <div class="col-md-12">

                      <div class="row"> 
                        <div class="col-md-4">
                        </div> 
                         <div class="col-md-2 animated lightSpeedIn">
                          <a href='/admin/apartments' class="btn btn-default btn-block"> <i class="fa fa-eye"></i>     Svi apartmani</a>
                                     
                                    <br /><br />
                        </div>
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/apartments/delete/<?php echo $data['row'][0]->apartment_id;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Obriši</a>
                                     
                                    <br /><br />
                             
                        </div>
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/apartments/edit/<?php echo $data['row'][0]->apartment_id;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Uredi</a>
                                     
                                    <br /><br />
                             
                        </div>
                       <div class="col-md-2  animated lightSpeedIn">
                          <a href='/admin/apartments/add' class="btn btn-default btn-block"> <i class="fa fa-pencil"></i>     Unos apartmana</a>
                                     
                                    <br /><br />
                        </div>
                      </div>
                      <div class="panel panel-info  animated fadeInUpBig">
                         <div class="panel-heading">
                                     
                                  <h3 class="panel-title">Pregled apartmana: <?php echo $data['row'][0]->name;?>  </h3> 
                          </div>

                          <div class="panel-body">



                                      <div class="row">

                                           <div class="col-md-6">


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Redni broj: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->apartment_id;?>  </h6>
                                              </div>
                                            </div>



                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Ime: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->name;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>
       


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Broj ležaja: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->broj_lezaja;?>  </h6>
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
                                                <h6>Cijena u predsezoni od: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_predsezona_od;?>  € </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u predsezoni do: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_predsezona_do;?>  € </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u sezoni od: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_sezona_od;?>  €</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u sezoni do: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_sezona_do;?>  €</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u posezoni od: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_posezona_od;?>  €</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u posezoni do: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_posezona_do;?>  €</h6>
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

                                        <div class="col-md-6">
                                          <div class="row">
                                          <div class="col-md-12"><p>Kratki opis vašeg apartmana: </p></div>
                                             <div class="col-md-12 apartman_description">
                                                 <p> <?php echo $data['row'][0]->description;?>  </p>
                                             </div>
                                          <div class="col-md-12"><p>Slike koje su dodane uz vaš apartman: </p></div>
                                            <div class="col-md-4 apartman_img">
                                                <img src='<?php echo DIR . $data['row'][0]->img;?>' />

                                                <br />
                                             </div>
                                            <div class="col-md-4 apartman_img">
                                                <img src='<?php echo DIR . $data['row'][0]->img_1;?>' />

                                                <br />
                                             </div>
                                            <div class="col-md-4 apartman_img">
                                                <img src='<?php echo DIR . $data['row'][0]->img_2;?>' />
                                                <br />
                                             </div>
                                          </div>

                                              <div class="row">
                                                  <div class="col-md-12"><p><br /> Prikaz vašeg apartmana na karti: </p>
                                                          <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                                                              <script>
                                                                function initialize() {
                                                                  var myLatlng = new google.maps.LatLng(<?php echo $data['row'][0]->lon;?>,<?php echo $data['row'][0]->lat;?>);
                                                                  var mapOptions = {
                                                                    zoom: 16,
                                                                    center: myLatlng
                                                                  }
                                                                  var map = new google.maps.Map(document.getElementById('map-canvas-apartment'), mapOptions);

                                                                  var marker = new google.maps.Marker({
                                                                      position: myLatlng,
                                                                      map: map,
                                                                      title: 'Hello World!'
                                                                  });
                                                                }

                                                                google.maps.event.addDomListener(window, 'load', initialize);

                                                              </script>

                                                              <br />
                                                               <br />

                                                    <div id="map-canvas-apartment"></div>
                                                  </div>
                                              </div>

                                        </div>


                                      </div>


                                      
                                     
                                    <br /><br />
                             
                           </div>
                       </div>

 
                   </div>
                </div> 



          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->