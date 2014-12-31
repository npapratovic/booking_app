 
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
                        <div class="col-md-2">
                        <a href='/admin/guests/addguest' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Dodaj gosta</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>
                    <div class="panel-heading">
                           Pregled gostiju
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">

                   <table class="table table-striped table-bordered table-hover">
                      <tr>
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
                          echo "<td>$row->firstName</td>";
                          echo "<td>$row->lastName</td>";
                          echo "<td>$row->city</td>";  
                          echo "<td>$row->country</td>"; 
                          echo "<td>$row->date</td>";  
                          echo "<td><a href='".DIR."admin/guests/editguest/$row->id' class='btn btn-default'>Uredi</a> 
                          <a href='".DIR."admin/guests/delete/$row->id' class='btn btn-default'>Obriši</a>   <a href='".DIR."admin/guests/view/$row->id' class='btn btn-default'>Pogledaj</a> </td>";
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
 