 
  
  <?php // include ('includes/topbar-nav.php'); ?>
    

      <?php //include ('includes/sidebar-nav.php'); ?> 
  <div id="wrapper">    
      <?php include ('includes/top-sidebar-nav.php'); ?>

   <div id="page-wrapper" >
      <div class="container-fluid"> 
        <div class="row"> 
            <div class="col-md-12">
                      <div class="row"> 
                        <div class="col-md-10">
                        </div> 
                        <div class="col-md-2 animated lightSpeedIn">
                        <a href='/admin/apartments/add' class="btn btn-success btn-block"> <i class="fa fa-plus"></i>     Dodaj apartman</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>

                      <div class="row">
                       <div class="col-md-12">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                             <h5>Pregled apartmana</h5>
                          </div>
                            <div class="panel-body">
                              <div class="table-responsive">

                               <table class="table table-striped table-bordered table-hover">
                                  <tr>
                                    <th>Šifra  </th>
                                    <th>Ime</th>
                                     <th>Akcija</th> 

                                  </tr>

                                  <?php if($data['apartments']){
                                    foreach ($data['apartments'] as $row) {
                                      echo "<tr>";
                                      echo "<td class='col-md-2'>$row->apartment_id</td>";
                                      echo "<td class='col-md-6'>$row->name</td>";
                                      echo "<td class='col-md-6'><a href='".DIR."admin/apartments/edit/$row->apartment_id' class='btn btn-default'><i class='fa fa-edit'></i>  Uredi</a> 
                                      <a href='".DIR."admin/apartments/delete/$row->apartment_id' class='btn btn-default'><i class='fa fa-trash'></i>  Obriši</a>   <a href='".DIR."admin/apartments/view/$row->apartment_id' class='btn btn-default'><i class='fa fa-eye'></i>  Pregledaj</a> <a href='".DIR."admin/reservations/apartment/$row->apartment_id' class='btn btn-default'><i class='fa fa-smile-o'></i>  Rezervacije</a></td>";
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
                     

                      
                   </div>
                </div>



          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->