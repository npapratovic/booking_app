  
 	<?php // include ('includes/topbar-nav.php'); ?>
    

      <?php //include ('includes/sidebar-nav.php'); ?> 
  <div id="wrapper">    
      <?php include ('includes/top-sidebar-nav.php'); ?>

	 <div id="page-wrapper" >
	    <div class="container-fluid">      	  
			   <div class="row">
                <div class="col-lg-3 col-md-6 animated pulse">
                    <div class="shadowed">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-comments fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge"><?php if($data['apartment_count']){
                                      foreach ($data['apartment_count'] as $row) {  
                                        echo "$row->apartment_count"; 
                                      }

                                    }

                                    ?></div>
                                      <div>evidentiranih apartmana</div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animated pulse">
                  <div class="shadowed">
                      <div class="panel panel-green">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-users fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge"><?php if($data['guest_count']){
                                      foreach ($data['guest_count'] as $row) {  
                                        echo "$row->guest_count"; 
                                      }

                                    }

                                    ?></div>
                                      <div>evidentiranih gostiju</div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animated pulse">
                  <div class="shadowed">
                      <div class="panel panel-yellow">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-tasks fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge"><?php if($data['reservation_count']){
                                      foreach ($data['reservation_count'] as $row) {  
                                        echo "$row->reservation_count"; 
                                      }

                                    }

                                    ?></div>
                                      <div>evidentiranih rezervacija</div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
                </div> 
              <div class="col-lg-3 col-md-6 animated pulse">
                  <div class="shadowed">
                      <div class="panel panel-red">
                          <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <i class="fa fa-male fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9 text-right">
                                      <div class="huge"> <?php if($data['user_count']){
                                      foreach ($data['user_count'] as $row) {  
                                        echo "$row->user_count"; 
                                      }

                                    }

                                    ?></div>
                                      <div>korisnika aplikacije</div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
                </div> 
            </div>


            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">

                        <div class="panel-heading">
                           <h5>Pregled zadnjih 10 rezervacija:  </h5>
                        </div>

                         <div class="panel-body">
                            <div class="table-responsive">

                               <table class="table table-striped table-bordered table-hover">
                                  <tr>
                                    <th>Gost</th>
                                    <th>Apartman</th> 
                                    <th>Check in</th> 
                                    <th>Check out</th> 
                                    <th>Rezervirano</th>  
                                    <th>Plaćeno</th>
                                    <th>Akcija</th> 

                                  </tr> 

                                  <?php if($data['reservations']){
                                    foreach ($data['reservations'] as $row) { 
                                      echo "<tr style='vertical-align:center'>";
                                      echo "<td>$row->firstName $row->lastName</td>";
                                      echo "<td>$row->name</td>";
                                      echo "<td>$row->check_in</td>";
                                      echo "<td>$row->check_out</td>";
                                      echo "<td>$row->booking_date</td>";
                                      if ($row->payed == 'DA') {
                                        echo "<td class='payed'>$row->payed</td>"; 
                                      }
                                      else  {
                                        echo "<td class='not_payed'>$row->payed</td>"; 
                                      }
                                      echo "<td ><a href='".DIR."admin/reservations/edit/$row->reservation_id' class='btn btn-default' data-toggle='tooltip' data-placement='top' title='' data-original-title='Uredi'><i class='fa fa-edit'></i>  </a> 
                                      <a href='".DIR."admin/reservations/delete/$row->reservation_id' class='btn btn-default'data-toggle='tooltip' data-placement='top' title='' data-original-title='Obriši'><i class='fa fa-trash'></i></a><a href='".DIR."admin/reservations/view/$row->reservation_id' class='btn btn-default' data-toggle='tooltip' data-placement='top' title='' data-original-title='Pregledaj'><i class='fa fa-eye'></i>  </a> </td>";
                                      echo "</tr>";
                                    }

                                  }

                                  ?>

                               </table>

                   
                         </div>

                    </div>
                  </div>
              </div>
            </div>





	        </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->