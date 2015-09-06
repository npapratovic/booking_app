 
    <?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              


                <div class="row"> 
                   <div class="col-md-12">

                      <div class="row"> 
                        <div class="col-md-6">
                        </div> 
                         <div class="col-md-2">
                          <a href='/admin/apartments' class="btn btn-default btn-block"> <i class="fa fa-eye"></i>     Svi apartmani</a>
                                     
                                    <br /><br />
                        </div>
                        <div class="col-md-2">
                        <a href='/admin/apartments/edit/<?php echo $data['row'][0]->id;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Uredi</a>
                                     
                                    <br /><br />
                             
                        </div>
                       <div class="col-md-2">
                          <a href='/admin/apartments/add' class="btn btn-default btn-block"> <i class="fa fa-pencil"></i>     Unos apartmana</a>
                                     
                                    <br /><br />
                        </div>
                      </div>
                      <div class="panel panel-info">
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
                                                 <h6><?php echo $data['row'][0]->id;?>  </h6>
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
                                                <h6>Cijena u predsezoni: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_predsezona;?>  € </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u sezoni: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_sezona;?>  €</h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Cijena u posezoni: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->cijena_posezona;?>  €</h6>
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
                                                  <div class="col-md-12">
                                                    <div class="apartment-img">
                                                    <img src='<?php echo $data['row'][0]->img;?>' />
                                                    </div>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-12">
                                                          <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                                                              <script>
                                                                function initialize() {
                                                                  var myLatlng = new google.maps.LatLng(<?php echo $data['row'][0]->lon;?>,<?php echo $data['row'][0]->lat;?>);
                                                                  var mapOptions = {
                                                                    zoom: 12,
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
                                                    <div class="divider"></div>
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


        </div>


        </div>
   </div>
 