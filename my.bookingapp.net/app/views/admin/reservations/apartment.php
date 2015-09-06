 
  <?php // include ('includes/topbar-nav.php'); ?>
    

      <?php //include ('includes/sidebar-nav.php'); ?> 
  <div id="wrapper">    
      <?php include ('includes/top-sidebar-nav.php'); ?>

   <div id="page-wrapper" >
      <div class="container-fluid"> 
   
          <div class="row"> 
            <div class="col-md-12">


                        <div class="row"> 
                          <div class="col-md-8">
                          </div> 
                          <div class="col-md-2">
                          <a href='/admin/reservations' class="btn btn-info btn-block"> <i class="fa fa-eye"></i>     Sve rezervacije</a>
                                       
                                      <br /><br />
                               
                          </div>
                          <div class="col-md-2">
                          <a href='/admin/reservations/add' class="btn btn-success btn-block"> <i class="fa fa-pencil-square-o"></i>     Dodaj rezervaciju</a>
                                       
                                      <br /><br />
                               
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                <h5>LEGENDA: </h5>
                              </div>
                              <div class="panel-body">
                                <div class="col-md-2">
                                  <div class="color-label" style="background: #459e00; height: 40px; border: 1px solid #ccc; opacity: 0.5;"></div>
                                </div>
                                <div class="col-md-2">
                                  <h5>REZERVIRANO</h5>
                                </div>
                                <div class="col-md-2">
                                  <div class="color-label" style="background: #FFFFFF; height: 40px; border: 1px solid #ccc;"></div>
                                </div>
                                <div class="col-md-2">
                                  <h5>SLOBODNO</h5>
                                </div>
                               <div class="col-md-2">
                                  <div class="color-label" style="background: #fcf8e3; height: 40px; border: 1px solid #ccc;"></div>
                                </div>
                                <div class="col-md-2">
                                  <h5>DANAS</h5>
                                </div> 
                              </div>
                            </div> 
                          </div>
                        </div>
 
                        
                       <div class="row">
                         <div class="col-md-12"> 
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                 <h5>Pregled rezervacija za apartman: <?php echo $data['perapartment'][0]->name;?> </h5>
                              </div>
                              <div class="panel-body">
                                 <div id='calendar'></div> 
                              </div>
                            </div> 
                         </div>
                       </div>




                        
                          <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                 <h5>Pregled rezervacija za apartman: <?php echo $data['perapartment'][0]->name;?> </h5>
                              </div>

                              <div class="panel-body">
                                  <div class="table-responsive">

                                       <table class="table table-striped table-bordered table-hover">
                                          <tr>
                                            <th>Redni broj</th>
                                            <th>Gost</th>
                                            <th>Apartman</th> 
                                            <th>Check in</th> 
                                            <th>Check out</th> 
                                            <th>Rezervirano</th>  
                                            <th>Plaćeno</th>
                                            <th>Akcija</th> 

                                          </tr>

                                          <?php if($data['perapartment']){

                                            foreach ($data['perapartment'] as $row) { 
                                              echo "<tr>";
                                              echo "<td>$row->reservation_id</td>";
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
                                              echo "<td><a href='".DIR."admin/reservations/edit/$row->reservation_id' class='btn btn-default'><i class='fa fa-edit'></i>  Uredi</a> 
                                              <a href='".DIR."admin/reservations/delete/$row->reservation_id' class='btn btn-default'><i class='fa fa-trash'></i>  Obriši</a>   <a href='".DIR."admin/reservations/view/$row->reservation_id' class='btn btn-default'><i class='fa fa-eye'></i>  Pregledaj</a> </td>";
                                              echo "</tr>";
                                            }

                                          }

                                          ?>

                                       </table>

                         
                                  </div>





                              </div><!-- end panel body -->

                            </div>
                          </div>
                        </div>



                   </div><!-- end content of main container -->
                </div>
          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->

   <!-- only for calendar -->
  <script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title' 
       },
      lang: 'hr',
      defaultDate: '2015-03-15',
      editable: false,
      theme: false,
      eventLimit: true, // allow "more" link when too many events 
      events: '<?php echo DIR; ?>admin/reservations/feed/<?php echo $data['json_feed'][0]->id_apartment;?>'
 

    });
    
  });

</script>
 