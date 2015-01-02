 
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
                         <div class="col-md-2">
                          <a href='/admin/reservations' class="btn btn-default btn-block"> <i class="fa fa-eye"></i>     Sve rezervacije</a>
                                     
                                    <br /><br />
                        </div>
                        <div class="col-md-2">
                          <a href='/admin/reservations/delete/<?php echo $data['row'][0]->reservation_id;?>' class="btn btn-default btn-block"> <i class="fa fa-eye"></i>     Obriši</a>
                                     
                                    <br /><br />
                        </div>
                        <div class="col-md-2">
                        <a href='/admin/reservations/edit/<?php echo $data['row'][0]->reservation_id;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Uredi</a>
                                     
                                    <br /><br />
                             
                        </div>
                       <div class="col-md-2">
                          <a href='/admin/reservations/add' class="btn btn-default btn-block"> <i class="fa fa-pencil"></i>     Unos rezervacije</a>
                                     
                                    <br /><br />
                        </div>
                      </div>
                      <div class="panel panel-info animated fadeInUpBig">
                         <div class="panel-heading">
                                     
                                  <h3 class="panel-title">Pregled rezervacije broj: <?php echo $data['row'][0]->reservation_id;?>  </h3> 
                          </div>

                          <div class="panel-body">



                                      <div class="row">

                                           <div class="col-md-6">


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Šifra gosta: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->id_guest;?>  </h6>
                                              </div>
                                            </div>



                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Šifra apartmana: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->id_apartment;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>
       


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Check in: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->check_in;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

 

 
                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Check_out: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->check_out;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                             <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Plaćeno: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->payed;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>
                                             


                                            <div class="row">
                                              <div class="divider"></div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">  </div>


                                      </div>


                                      
                                     
                                    <br /><br />
                             
                           </div>
                       </div>

 
                   </div>
                </div> 


        </div>


        </div>
   </div>
 