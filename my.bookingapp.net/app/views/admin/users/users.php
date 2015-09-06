 
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
                        <a href='/admin/users/user-groups' class="btn btn-success btn-block"> <i class="fa fa-plus"></i>    Grupe korisnika</a>
                                     
                                    <br /><br />
                             
                        </div>
                        <div class="col-md-2">
                        <a href='/admin/users/add' class="btn btn-success btn-block"> <i class="fa fa-plus"></i>     Dodaj korisnika</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>

                      <div class="row">
                       <div class="col-md-12">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                             <h5>Pregled korisnika</h5>
                          </div>
                            <div class="panel-body">
 
                                 <div class="row head-list-row">
                                    <div class="col-xs-3 head-list-item">Ime i prezime  </div>
                                    <div class="col-xs-3 head-list-item">Mjesto</div>
                                    <div class="col-xs-3 head-list-item">Email</div> 
                                    <div class="col-xs-3 head-list-item">Akcija</div> 

                                  </div>

 
                                  <?php if($data['users']){
                                    foreach ($data['users'] as $row) {
                                      echo "<div class='row list-item-row'>";
                                      echo "<div class='col-sm-12 col-md-3 list-item'>$row->ime $row->prezime</div>";
                                      echo "<div class='col-sm-12 col-md-3 list-item'>$row->mjesto</div>";
                                      echo "<div class='col-sm-12 col-md-3 list-item'>$row->email</div>"; 
                                      echo "<div class='col-sm-12 col-md-3 list-item'><a href='".DIR."admin/users/edit/$row->id_user' class='btn btn-default'><i class='fa fa-edit'></i></a> 
                                      <a href='".DIR."admin/users/delete/$row->id_user' class='btn btn-default'><i class='fa fa-trash'></i></a>   <a href='".DIR."admin/users/view/$row->id_user' class='btn btn-default'><i class='fa fa-eye'></i></a></div>";
                                      echo "</div>";
                                    }

                                  }

                                  ?>

                   
 
                           </div>
                        </div>
                       </div>
                      </div>
                     

                      
                   </div>
                </div>



          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->