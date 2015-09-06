 
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
                       <div class="col-md-2 animated pulse">
                        <a href='/admin/users/' class="btn btn-success btn-block"> <i class="fa fa-plus"></i>    Svi korinici</a>
                                     
                                    <br /><br />
                             
                        </div>
                      
                        <div class="col-md-2 animated pulse">
                        <a href='/admin/users/user-groups/add-user-group' class="btn btn-success btn-block"> <i class="fa fa-plus"></i>     Dodaj grupu</a>
                                     
                                    <br /><br />
                             
                        </div>
                      </div>

                      <div class="row">
                       <div class="col-md-12">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                             <h5>Pregled grupa korisnika</h5>
                          </div>
                            <div class="panel-body">
 
                                 <div class="row head-list-row">
                                     <div class="col-xs-12 head-list-item">Naziv</div>
 
                                  </div>

 
                                  <?php if($data['user_groups']){
                                    foreach ($data['user_groups'] as $row) {
                                      echo "<div class='row list-item-row'>";
                                      echo "<div class='col-sm-12 col-md-8 list-item'>$row->name</div>";
                                      echo "<div class='col-sm-12 col-md-4 list-item'><a href='".DIR."admin/users/user-groups/edit-user-group/$row->id' class='btn btn-default'><i class='fa fa-edit'></i></a> 
                                      <a href='".DIR."admin/users/user-groups/delete-user-group/$row->id' class='btn btn-default'><i class='fa fa-trash'></i></a>  </div>";
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