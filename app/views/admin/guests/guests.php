 
  <?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              
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
                    <div class="panel-heading animated fadeInUpBig">
                           <h3>Pregled gostiju</h3>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive animated fadeInUpBig">

                   <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <th>Šifra gosta</th> 
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Grad</th> 
                        <th>Država</th>  
                        <th>Datum evidencije</th>   
                        <th>Akcija</th> 

                      </tr>

                      <?php if($data['guests']){
                        foreach ($data['guests'] as $row) {
                          echo "<tr>";
                          echo "<td class='col-md-1'>$row->guest_id</td>"; 
                          echo "<td class='col-md-2'>$row->firstName</td>";
                          echo "<td class='col-md-2'>$row->lastName</td>";
                          echo "<td class='col-md-2'>$row->city</td>";  
                          echo "<td class='col-md-1'>$row->country</td>"; 
                          echo "<td class='col-md-1'>$row->date</td>";  
                          echo "<td class='col-md-3'><a href='".DIR."admin/guests/editguest/$row->guest_id' class='btn btn-default'><i class='fa fa-edit'></i>  Uredi</a> 
                          <a href='".DIR."admin/guests/delete/$row->guest_id' class='btn btn-default'><i class='fa fa-trash'></i>  Obriši</a>   <a href='".DIR."admin/guests/view/$row->guest_id' class='btn btn-default'><i class='fa fa-eye'></i>   Pogledaj</a> </td>";
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
 