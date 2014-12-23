 
  <?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              
        <div class="row"> 
            <div class="col-md-12">

                    <div class="panel-heading">
                           Pregled gostiju
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">

                   <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th> 
                      </tr>

                      <?php if($data['guests']){
                        foreach ($data['guests'] as $row) {
                          echo "<tr>";
                          echo "<td>$row->firstName</td>";
                          echo "<td>$row->lastName</td>";
                          echo "<td><a href='".DIR."admin/guests/editguest/$row->id'>Edit</a>
                          <a href='".DIR."admin/guests/deleteguest/$row->id'>Delete</a></td>";
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
 