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
                          <a href='/admin/users' class="btn btn-default btn-block"> <i class="fa fa-eye"></i>     Svi korisnici</a>
                                     
                                    <br /><br />
                        </div>
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/users/delete/<?php echo $data['row'][0]->id_user;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Obriši</a>
                                     
                                    <br /><br />
                             
                        </div>
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/users/edit/<?php echo $data['row'][0]->id_user;?>' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Uredi</a>
                                     
                                    <br /><br />
                             
                        </div>
                       <div class="col-md-2  animated lightSpeedIn">
                          <a href='/admin/users/add' class="btn btn-default btn-block"> <i class="fa fa-pencil"></i>     Unos korisnika</a>
                                     
                                    <br /><br />
                        </div>
                      </div>
                      <div class="panel panel-info  animated fadeInUpBig">
                         <div class="panel-heading">
                                     
                                  <h3 class="panel-title">Pregled korisnika: <?php echo $data['row'][0]->ime;?> <?php echo $data['row'][0]->prezime;?> </h3> 
                          </div>

                          <div class="panel-body">



                                      <div class="row">

                                           <div class="col-md-6">


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Redni broj: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->id_user;?>  </h6>
                                              </div>
                                            </div>



                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Ime: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->ime;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>

                                            <div class="row"> 
                                              <div class="col-sm-3">
                                                <h6>Prezime: </h6>
                                              </div>

                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->prezime;?>  </h6>
                                              </div>
                                              <div class="divider"></div> 
                                             </div>
         


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Mjesto: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->mjesto;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>


                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Email: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->email;?>  </h6>
                                              </div>
                                              <div class="divider"></div>
                                            </div>

                                            <div class="row">
                                              <div class="col-sm-3">
                                                <h6>Tip korisnika: </h6>
                                              </div> 
                                              <div class="col-sm-9">
                                                 <h6><?php echo $data['row'][0]->user_group;?>   </h6>
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

          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->