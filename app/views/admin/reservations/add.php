 
 	<?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
          	  
				        <div class="row"> 
				           <div class="col-md-12 animated fadeInUpBig">
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
                                    <label class="col-sm-3 control-label">Šifra gosta: </label>
                                      <div class="col-sm-5">
                                        <input type="text" class="form-control" name="id_guest" placeholder="Šifra gosta...">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Šifra apartmana: </label>
                                      <div class="col-sm-5">
                                        <input type="text" class="form-control" name="id_apartment" placeholder="Šifra apartmana...">
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
                                        <select class="form-control" name="payed">
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
        </div>


        </div>
   </div>
 