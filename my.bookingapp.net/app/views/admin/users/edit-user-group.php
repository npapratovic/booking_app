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
                                      <h3 class="panel-title">Uređivanje grupe korisnika: <?php echo $data['row'][0]->name;?></h3> 
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
                                      <label class="col-sm-3 control-label">Naziv:  </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="name" placeholder="<?php echo $data['row'][0]->name;?>">
                                        </div>
                                  </div> 
                                  <div class="col-md-12">
                                  <h5>Upraviteljska prava:</h5>
                                  </div> 
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Upravljanje korisnicima: </label>
                                        <div class="col-sm-1">
                                          <input type="checkbox" class="form-control" name="upravljanje_korisnicima" value="upravljanje_korisnicima" <?php  $_upravljanje_korisnicima = $data['row'][0]->upravljanje_korisnicima; if ($_upravljanje_korisnicima=="0") {echo 'checked';}?> >
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Unos gostiju: </label>
                                        <div class="col-sm-1">
                                          <input type="checkbox" class="form-control" name="unos_gostiju" value="unos_gostiju" <?php $_unos_gostiju = $data['row'][0]->unos_gostiju; if ($_unos_gostiju=="0") {echo 'checked';}?>>
                                        </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-3 control-label">Unos apartmana: </label>
                                        <div class="col-sm-1">
                                          <input type="checkbox" class="form-control" name="unos_apartmana" value="unos_apartmana" <?php  $_unos_apartmana = $data['row'][0]->unos_apartmana; if ($_unos_apartmana=="0") {echo 'checked';}?>>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Pregled apartmana: </label>
                                        <div class="col-sm-1">
                                          <input type="checkbox" class="form-control" name="pregled_apartmana" value="pregled_apartmana" <?php  $_pregled_apartmana = $data['row'][0]->pregled_apartmana; if ($_pregled_apartmana=="0") {echo 'checked';}?>>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Unos rezervacija: </label>
                                        <div class="col-sm-1">
                                          <input type="checkbox" class="form-control" name="unos_rezervacija" value="unos_rezervacija" <?php  $_unos_rezervacija = $data['row'][0]->unos_rezervacija; if ($_unos_rezervacija=="0") {echo 'checked';}?>>
                                        </div>
                                  </div>
                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">Pregled rezervacija: </label>
                                        <div class="col-sm-1">
                                          <input type="checkbox" class="form-control" name="pregled_rezervacija" value="pregled_rezervacija" <?php  $_pregled_rezervacija = $data['row'][0]->pregled_rezervacija; if ($_pregled_rezervacija=="0") {echo 'checked';}?>>
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