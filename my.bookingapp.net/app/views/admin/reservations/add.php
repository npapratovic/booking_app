 
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
                                      <h3 class="panel-title">Unos rezervacije</h3> 
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
                              <div class="form-group">
                                    <label class="col-sm-3 control-label">Gost: </label>
                                      <div class="col-sm-6">
                                        <select name="id_guest" class="form-control selectpicker show-tick" data-style="btn-info" data-live-search="true" data-size="10">
                                          <?php if($data['guests']){
                                            echo "<option>Odaberi gosta</option>"; 
                                            foreach ($data['guests'] as $guest) {
                                               echo "<option value='$guest->guest_id'>$guest->firstName $guest->lastName</option>";
                                            }
                                          }
                                          ?>
                                        </select>
                                      </div>
                                </div>
                               <div class="form-group">
                                    <label class="col-sm-3 control-label">Apartman: </label>
                                      <div class="col-sm-6">
                                        <select name="id_apartment" class="form-control selectpicker show-tick" data-style="btn-info" data-live-search="true" data-size="10">
                                          <?php if($data['apartments']){
                                            echo "<option>Odaberi apartman</option>"; 
                                            foreach ($data['apartments'] as $apartment) {
                                               echo "<option value='$apartment->apartment_id'>$apartment->name</option>";
                                            }
                                          }
                                          ?>
                                        </select>
                                      </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Check in: </label>
                                      <div class="col-sm-2">
                                        <input type="date" class="form-control" name="check_in" placeholder="Datum prijave...">
                                      </div>
                                    <label class="col-sm-1 control-label">Check out: </label>
                                      <div class="col-sm-2">
                                        <input type="date" class="form-control" name="check_out" placeholder="Datum odjave...">
                                      </div>
                                </div>
                               <div class="form-group">
                                    <label class="col-sm-3 control-label">Plaćeno: </label>
                                      <div class="col-sm-5">
                                        <select class="form-control selectpicker show-tick" data-style="btn-info" data-live-search="true" data-size="10" name="payed">
                                            <option>Odaberi...</option> 
                                            <option value="DA">DA</option>
                                            <option value="NE">NE</option>  
                                        </select> 
                                      </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-default">Sačuvaj</button>
                                 
                             </form>
                          </div>
                       </div>

 
                   </div>
                </div>
          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->