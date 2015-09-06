 
  
  <?php // include ('includes/topbar-nav.php'); ?>
    

      <?php //include ('includes/sidebar-nav.php'); ?> 
  <div id="wrapper">    
      <?php include ('includes/top-sidebar-nav.php'); ?>

   <div id="page-wrapper" >
      <div class="container-fluid"> 
				        <div class="row"> 
				           <div class="col-md-12    ">
                      <div class="panel panel-default">
                         <div class="panel-heading">
                                      <h3 class="panel-title">Unos gosta</h3> 
                          </div>

                          <div class="panel-body">

                           <?php 
                            if(isset($error)){
                              foreach ($error as $error) {
                                echo "<p>$error</p>";
                              }
                            }

                           ?>

                             <form class="form-horizontal form-border" action='' method='post'>
                              <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Ime: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="firstName" placeholder="Ime...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Prezime: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="lastName" placeholder="Prezime...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Adresa: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="adress" placeholder="Adresa...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Poštanski broj: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="zip_code" placeholder="Poštanski broj...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Grad: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="city" placeholder="Grad...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Država: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="country" placeholder="Država...">
                                      </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Datum evidencije: </label>
                                      <div class="col-sm-6">
                                        <input type="date" class="form-control" name="date" placeholder="Datum evidencije...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kontakt broj: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="contact_number" placeholder="Kontakt broj...">
                                      </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email adresa: </label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="email" placeholder="Email adresa...">
                                      </div>
                                </div> 
                                <button type="submit" name="submit" class="btn btn-default">Sačuvaj</button>
                                   </div>

                                   <div class="col-md-6">
                                   <p><strong>UPUTA:</strong></p>
                                   </div>
                                 </div>
                             </form>
                          </div>
                       </div>

 
                   </div>
                </div>

          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->