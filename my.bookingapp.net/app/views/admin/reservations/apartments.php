 
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
                        <a href='/admin/apartments/add' class="btn btn-default btn-block"> <i class="fa fa-pencil-square-o"></i>     Dodaj apartman</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>
                    <div class="panel-heading">
                           Pregled apartmana
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">

                   <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <th>Ime</th>
                        <th>Geografska širina</th>
                        <th>Geografska dužina</th> 
                        <th>Akcija</th> 

                      </tr>

                      <?php if($data['apartments']){
                        foreach ($data['apartments'] as $row) {
                          echo "<tr>";
                          echo "<td>$row->name</td>";
                          echo "<td>$row->lon</td>";
                          echo "<td>$row->lat</td>"; 
                          echo "<td><a href='".DIR."admin/apartments/edit/$row->id' class='btn btn-default'>Uredi</a> 
                          <a href='".DIR."admin/apartments/delete/$row->id' class='btn btn-default'>Obriši</a>   <a href='".DIR."admin/apartments/view/$row->id' class='btn btn-default'>Pregledaj</a> </td>";
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
 