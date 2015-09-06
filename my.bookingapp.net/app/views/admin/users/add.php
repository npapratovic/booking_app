     <?php // include ('includes/topbar-nav.php'); ?>
    

      <?php //include ('includes/sidebar-nav.php'); ?> 
  <div id="wrapper">    
      <?php include ('includes/top-sidebar-nav.php'); ?>

   <div id="page-wrapper" >
      <div class="container-fluid">     
				        <div class="row"> 
				           <div class="col-md-12">
                      <div class="panel panel-default">
                         <div class="panel-heading">
                                      <h3 class="panel-title">Unos novog korisnika</h3> 
                          </div>

                          <div class="panel-body">

                           <?php 
                            if(isset($error)){
                              foreach ($error as $error) {
                                echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$error</div>";
                              }
                            }

                           ?>

                             <form class='form-horizontal form-border' action='' method='post' enctype='multipart/form-data'>
                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Ime: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="ime" placeholder="Ime...">
                                        </div>
                                  </div>  
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Prezime: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="prezime" placeholder="Prezime...">
                                        </div>
                                  </div>
                               
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Mjesto: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="mjesto" placeholder="Mjesto...">
                                        </div>
                                  </div>
                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">Korisničko ime: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="username" placeholder="Korisničko ime...">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Lozinka: </label>
                                        <div class="col-sm-6">
                                          <input type="password" class="form-control" name="password" placeholder="Lozinka...">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Ponovi lozinku: </label>
                                        <div class="col-sm-6">
                                          <input type="password" class="form-control" name="password_repeat" placeholder="Ponovi lozinku...">
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Email: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="email" placeholder="Email...">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Grupa korisnika: </label>
                                        <div class="col-sm-6">

                                        <select class="form-control" name="grupa_korisnika">
                                          <?php if($data['user_groups']){
                                            echo "<option>Odaberi grupu korisnika</option>"; 
                                            foreach ($data['user_groups'] as $user_group) {
                                               echo "<option value='$user_group->id'>$user_group->name </option>";
                                            }
                                          }
                                          ?>
                                        </select>

                                          
                                        </div>
                                  </div>
                                     

                                  </div>

                                  <div class="col-md-6"> 
                                  <p><strong>UPUTA:</strong> </p>
                            

                                    

                                  </div>
                                </div>
 
                                <button type="submit" name="submit" class="btn btn-default">Spremi</button>
                                 
                             </form>
                          </div>
                       </div>

 
                   </div>
                </div>

          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->