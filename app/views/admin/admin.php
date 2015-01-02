 
 	<?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


	        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	          	  
			 <div class="row">
                <div class="col-lg-4 col-md-6 animated fadeInUpBig">
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
                <div class="col-lg-4 col-md-6 animated fadeInUpBig">
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
                <div class="col-lg-4 col-md-6 animated fadeInUpBig">
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

                          <div class="panel-heading animated fadeInUpBig">
                           <h3>Pregled zadnjih 10 rezervacija:</h3>
                        </div>

                        <div class="panel-body animated fadeInUpBig">
                            <div class="table-responsive">

                               <table class="table table-striped table-bordered table-hover">
                                  <tr>
                                    <th>Redni broj rezervacije</th>
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
                                      echo "<td class='col-md-2'>$row->reservation_id</td>";
                                      echo "<td class='col-md-2'>$row->firstName $row->lastName</td>";
                                      echo "<td class='col-md-1'>$row->name</td>";
                                      echo "<td class='col-md-1'>$row->check_in</td>";
                                      echo "<td class='col-md-1'>$row->check_out</td>";
                                      echo "<td class='col-md-2'>$row->booking_date</td>";
                                      if ($row->payed == 'DA') {
                                        echo "<td class='payed'>$row->payed</td>"; 
                                      }
                                      else  {
                                        echo "<td class='not_payed'>$row->payed</td>"; 
                                      }
                                      echo "<td class='col-md-3'><a href='".DIR."admin/reservations/edit/$row->reservation_id' class='btn btn-default'><i class='fa fa-edit'></i>  Uredi</a> 
                                      <a href='".DIR."admin/reservations/delete/$row->reservation_id' class='btn btn-default'><i class='fa fa-trash'></i>  Obriši</a>   <a href='".DIR."admin/reservations/view/$row->reservation_id' class='btn btn-default'><i class='fa fa-eye'></i>  Pregledaj</a> </td>";
                                      echo "</tr>";
                                    }

                                  }

                                  ?>

                               </table>

                   
                         </div>

                    </div>


	        </div><!-- end main -->
       </div>
   </div>
 