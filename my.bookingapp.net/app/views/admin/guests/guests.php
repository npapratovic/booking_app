 
  
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
                        <a href='/admin/guests/addguest' class="btn btn-success btn-block"> <i class="fa fa-pencil-square-o"></i>     Dodaj gosta</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>

                      <div class="row">
                       <div class="col-md-12">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                                 <h5>Pregled gostiju</h5>
                            </div>

                           <div class="panel-body">
                            <div class="table-responsive">

                               <table class="table table-striped table-bordered table-hover">
                                  <tr>
                                    <th>Šifra gosta</th> 
                                    <th>Ime</th>
                                    <th>Prezime</th>
                                    <th>Grad</th> 
                                    <th>Država</th>  
                                    <th>Akcija</th> 

                                  </tr>

                                  <?php if($data['guests']){
                                    foreach ($data['guests'] as $row) {
                                      echo "<tr>";
                                      echo "<td>$row->guest_id</td>"; 
                                      echo "<td>$row->firstName</td>";
                                      echo "<td>$row->lastName</td>";
                                      echo "<td>$row->city</td>";  
                                      echo "<td>$row->country</td>"; 
                                       echo "<td><a href='".DIR."admin/guests/editguest/$row->guest_id' class='btn btn-default'><i class='fa fa-edit'></i>   </a> 
                                      <a href='".DIR."admin/guests/delete/$row->guest_id' class='btn btn-default'><i class='fa fa-trash'></i>   </a>   <a href='".DIR."admin/guests/view/$row->guest_id' class='btn btn-default'><i class='fa fa-eye'></i>    </a> </td>";
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