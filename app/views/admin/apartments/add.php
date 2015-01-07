 
 	<?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
          	  
				        <div class="row"> 
				           <div class="col-md-12">
                      <div class="panel panel-default  animated fadeInUpBig">
                         <div class="panel-heading">
                                      <h3 class="panel-title">Unos apartmana</h3> 
                          </div>

                          <div class="panel-body">

                           <?php 
                            if(isset($error)){
                              foreach ($error as $error) {
                                echo "<p>$error</p>";
                              }
                            }

                           ?>

                             <form class='form-horizontal form-border' action='' method='post' enctype='multipart/form-data'>
                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Ime: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="name" placeholder="Ime...">
                                        </div>
                                  </div>  
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Broj ležaja: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="broj_lezaja" placeholder="Broj ležaja">
                                        </div>
                                  </div>
                               
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Broj zvijezdica: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="broj_zvijezdica" placeholder="Broj zvijezdica">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Cijena predsezona: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="cijena_predsezona" placeholder="Cijena presezona (€)">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Cijena sezona: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="cijena_sezona" placeholder="Cijena sezona (€)">
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Cijena posezona: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="cijena_posezona" placeholder="Cijena posezona (€)">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Klima: </label>
                                        <div class="col-sm-6">
                                          <select class="form-control" name="klima">
                                              <option>Odaberi...</option> 
                                              <option value="DA">DA</option>
                                              <option value="NE">NE</option> 
                                          </select> 
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">SAT TV: </label>
                                        <div class="col-sm-6">
                                          <select class="form-control" name="sat_tv">
                                              <option>Odaberi...</option> 
                                              <option value="DA">DA</option>
                                              <option value="NE">NE</option> 
                                          </select> 
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">WIFI: </label>
                                        <div class="col-sm-6">
                                          <select class="form-control" name="wifi">
                                              <option>Odaberi...</option> 
                                              <option value="DA">DA</option>
                                              <option value="NE">NE</option> 
                                          </select> 
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Parking: </label>
                                        <div class="col-sm-6">
                                          <select class="form-control" name="parking">
                                              <option>Odaberi...</option> 
                                              <option value="DA">DA</option>
                                              <option value="NE">NE</option> 
                                          </select> 
                                        </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-3 control-label">Udaljenost plaža: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="udaljenost_plaza" placeholder="u metrima">
                                        </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-3 control-label">Udaljenost centar: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="udaljenost_centar" placeholder="u metrima">
                                        </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-3 control-label">Udaljenost trgovina: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="udaljenost_trgovina" placeholder="u metrima">
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Terasa: </label>
                                        <div class="col-sm-6">
                                          <select class="form-control" name="terasa">
                                              <option>Odaberi...</option> 
                                              <option value="DA">DA</option>
                                              <option value="NE">NE</option> 
                                          </select> 
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Pogled na more: </label>
                                        <div class="col-sm-6">
                                          <select class="form-control" name="pogled_more">
                                              <option>Odaberi...</option> 
                                              <option value="DA">DA</option>
                                              <option value="NE">NE</option> 
                                          </select> 
                                        </div>
                                  </div>

                                  </div>

                                  <div class="col-md-6"><!-- odabir na karti -->
                                  <p><strong>UPUTA:</strong> Upišite u tražilicu adresu svog apartmana, i odaberite "Pretraži", ili uz pomoć karte postavite marker na željenu destinaciju - možete i dvoklikom na željeno područje. </p>
                                  <div class="form-group">
                                    <fieldset class="gllpLatlonPicker">
                                      <div class="col-sm-9">
                                        <input type="text" class="gllpSearchField form-control">
                                      </div>
                                      <div class="col-sm-3">
                                        <input type="button" class="gllpSearchButton form-control" value="Pretraži">
                                      </div>
                                      <br/><br/>
                                      <div class="gllpMap">Google Maps</div>
                                      <br/>
                                      <div class="col-sm-4">
                                        <label class="control-label">Geografska širina / dužina:  </label>
                                      </div>
                                      <div class="col-sm-4">
                                        <input type="text" class="gllpLatitude form-control" name="lon" value="20"/>
                                      </div>
                                      <div class="col-sm-4">
                                        <input type="text" class="gllpLongitude form-control" name="lat" value="20"/>
                                      </div>
                                      <div class="col-md-2">
                                        <label class="control-label">Zoom: </label>
                                      </div>
                                      <div class="col-md-2">
                                        <input type="text" class="gllpZoom form-control" value="3"/>
                                      </div>
                                        <div class="col-md-4"><input type="button" class="gllpUpdateButton form-control" value="Ažuriraj kartu">
                                      </div>
                                      <br/>
                                    </fieldset>
                                    </div>

                                     <div class="form-group">
                                        <p>Dodaj slike uz apartman: </p>
                                          <div class="col-sm-12">
                                            <input class="form-control" type="file" name="img[]" />
                                            <input  class="form-control" type="file" name="img_1[]" />
                                            <input  class="form-control" type="file" name="img_2[]" />
                                          </div>
                                    </div>

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
 