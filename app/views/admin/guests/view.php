 
    <?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              


                <div class="row"> 
                   <div class="col-md-12">

                      <div class="row"> 
                        <div class="col-md-4">
                        </div> 
                         <div class="col-md-2 animated lightSpeedIn">
                          <a href='/admin/guests' class="btn btn-default btn-block"> <i class="fa fa-eye"></i>     Svi gosti</a>
                                     
                                    <br /><br />
                        </div>
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/guests/delete/<?php echo $data['row'][0]->guest_id;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Obriši</a>
                                     
                                    <br /><br />
                             
                        </div>
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/guests/editguest/<?php echo $data['row'][0]->guest_id;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Uredi</a>
                                     
                                    <br /><br />
                             
                        </div>
                       <div class="col-md-2 animated lightSpeedIn">
                          <a href='/admin/guests/addguest' class="btn btn-default btn-block"> <i class="fa fa-pencil"></i>     Novi gost</a>
                                     
                                    <br /><br />
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="panel panel-info animated fadeInUpBig">
                         <div class="panel-heading">
                                     
                                  <h3 class="panel-title">Pregled gosta: <?php echo $data['row'][0]->firstName;?> <?php echo $data['row'][0]->lastName;?>  </h3> 
                          </div>

                          <div class="panel-body">



                                      <div class="row">

                                           <div class="col-md-12">


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Redni broj: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->guest_id;?>  </h6>
                                              </div>
                                            </div>



                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Ime: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->firstName;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>
       

                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Prezime: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->lastName;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>


                                             <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Adresa: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->adress;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>


                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Poštanski broj: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->zip_code;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>




                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Grad: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->city;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>




                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Država: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->country;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>




                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Datum evidencije: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->date;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>



                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Kontakt broj: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->contact_number;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>


                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Kontakt email: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->email;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>


                                            <div class="row">
                                              <div class="divider"></div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                             
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
   </div>
 