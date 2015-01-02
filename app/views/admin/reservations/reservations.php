 
  <?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              
        <div class="row"> 
            <div class="col-md-12 animated fadeInUpBig">
                      <div class="row"> 
                        <div class="col-md-10">
                        </div> 
                        <div class="col-md-2">
                        <a href='/admin/reservations/add' class="btn btn-success btn-block"> <i class="fa fa-plus"></i>     Dodaj rezervaciju</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>
                  

                       
                      <div class="row">
                      <?php if($data['diff_apartments']){
                        foreach ($data['diff_apartments'] as $row) {  
                          echo "<div class='col-md-3'><div class='reservation-per-apartment'><i class='fa fa-home fa-5x'></i>";
                          echo "<h3> $row->name </h3>";  
                          echo " <a href='".DIR."admin/reservations/apartment/$row->id_apartment' class='btn btn-primary btn-block'><i class='fa fa-eye'></i>  Pregledaj rezervacije</a>  ";
                          echo "</div></div>";
                        }

                      }

                      ?>
                      </div>
  
        </div>


        </div>
   </div>
 