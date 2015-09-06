 
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
                                      <h3 class="panel-title">Unos apartmana</h3> 
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
                                    <label class="col-sm-3 control-label">Odaberi mjesto: </label>
                                      <div class="col-sm-6">
                                        <select name="city" class="form-control selectpicker show-tick" data-style="btn-info" data-live-search="true" data-size="10">
                                          <?php if($data['cities']){
                                            echo "<option>Odaberi mjesto</option>"; 
                                            foreach ($data['cities'] as $city) {
                                               echo "<option value='$city->city_id'>$city->name</option>";
                                            }
                                          }
                                          ?>
                                        </select>
                                      </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Odaberi tip smještaja: </label>
                                      <div class="col-sm-6">
                                        <select name="accomodationtype" class="form-control selectpicker show-tick" data-style="btn-info" data-live-search="true" data-size="10">
                                          <?php if($data['accomodationtypes']){
                                            echo "<option>Odaberi tip smještaja</option>"; 
                                            foreach ($data['accomodationtypes'] as $accomodationtype) {
                                               echo "<option value='$accomodationtype->accomodationtype_id'>$accomodationtype->name</option>";
                                            }
                                          }
                                          ?>
                                        </select>
                                      </div>
                                </div>
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Naziv: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="name" placeholder="Naziv">
                                        </div>
                                  </div>  
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Opis: </label>
                                        <div class="col-sm-6">
                                          <textarea class="form-control" name="description" placeholder="Kratki opis vašeg apartmana..." rows="3"></textarea> 
                                        </div>
                                  </div>  
                                   <div class="form-group">
                                      <label class="col-sm-3 control-label">Opširniji opis: </label>
                                        <div class="col-sm-6">
                                          <textarea class="form-control" name="long_description" placeholder="Opširniji opis vašeg apartmana..." rows="8"></textarea> 
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
                                        <div class="col-sm-3">
                                          <p>OD: </p><input type="text" class="form-control" name="cijena_predsezona_od" placeholder="(€)">
                                        </div>
                                        <div class="col-sm-3">
                                          <p>DO: </p><input type="text" class="form-control" name="cijena_predsezona_do" placeholder="(€)">
                                        </div>
                                  </div>
                       
                                 <div class="form-group">
                                      <label class="col-sm-3 control-label">Cijena sezona: </label>
                                        <div class="col-sm-3">
                                         <p>OD: </p> <input type="text" class="form-control" name="cijena_sezona_od" placeholder="(€)">
                                        </div>
                                       <div class="col-sm-3">
                                         <p>DO: </p> <input type="text" class="form-control" name="cijena_sezona_do" placeholder="(€)">
                                        </div>
                                  </div>
      
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Cijena posezona: </label>
                                        <div class="col-sm-3">
                                         <p>OD: </p> <input type="text" class="form-control" name="cijena_posezona_od" placeholder="(€)">
                                        </div>
                                         <div class="col-sm-3">
                                          <p>DO: </p><input type="text" class="form-control" name="cijena_posezona_do" placeholder="(€)">
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
                                  <p><strong>UPUTA:</strong> Marker postavite na poziciju gdje se nalazi Vaš apartman </p>
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

          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->