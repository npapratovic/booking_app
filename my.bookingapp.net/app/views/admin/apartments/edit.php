 
  
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
                                      <h3 class="panel-title">Uređivanje apartmana</h3> 
                          </div>

                          <div class="panel-body">
 
                           <?php 
                            if(isset($error)){
                              foreach ($error as $error) {
                                echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$error</div>";
                              }
                            }

                           ?>

                             <form class="form-horizontal form-border" action='' method='post' enctype='multipart/form-data'>
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
                                      <label class="col-sm-3 control-label">Ime: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="name" placeholder="Ime..." value='<?php echo $data['row'][0]->name;?>'>
                                        </div>
                                    </div>  
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Kratki opis vašeg apartmana: </label>
                                          <div class="col-sm-6">
                                            <textarea class="form-control" name="description" placeholder="Kratki opis vašeg apartmana..." rows="3" value='<?php echo $data['row'][0]->description;?>'><?php echo $data['row'][0]->description;?></textarea>
                                          </div>
                                    </div> 
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Opširniji opis vašeg apartmana: </label>
                                          <div class="col-sm-6">
                                            <textarea class="form-control" name="long_description" placeholder="Opširniji opis vašeg apartmana..." rows="8" value='<?php echo $data['row'][0]->long_description;?>'><?php echo $data['row'][0]->long_description;?></textarea>
                                          </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Broj ležaja: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="broj_lezaja" placeholder="Broj ležaja" value='<?php echo $data['row'][0]->broj_lezaja;?>'>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Broj zvijezdica: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="broj_zvijezdica" placeholder="Broj zvijezdica" value='<?php echo $data['row'][0]->broj_zvijezdica;?>'>
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Cijena predsezona od: </label>
                                          <div class="col-sm-3">
                                            <p>OD: </p><input type="text" class="form-control" name="cijena_predsezona_od" placeholder="  (€)" value='<?php echo $data['row'][0]->cijena_predsezona_od;?>'>
                                          </div>
                                          <div class="col-sm-3">
                                           <p>DO: </p> <input type="text" class="form-control" name="cijena_predsezona_do" placeholder="  (€)" value='<?php echo $data['row'][0]->cijena_predsezona_do;?>'>
                                          </div>
                                    </div>
                             
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Cijena sezona: </label>
                                          <div class="col-sm-3">
                                            <p>OD: </p><input type="text" class="form-control" name="cijena_sezona_od" placeholder="(€)" value='<?php echo $data['row'][0]->cijena_sezona_od;?>'>
                                          </div>
                                           <div class="col-sm-3">
                                            <p>DO: </p><input type="text" class="form-control" name="cijena_sezona_do" placeholder="(€)" value='<?php echo $data['row'][0]->cijena_sezona_do;?>'>
                                          </div>

                                    </div>
                                
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cijena posezona: </label>
                                          <div class="col-sm-3">
                                          <p>OD: </p> <input type="text" class="form-control" name="cijena_posezona_od" placeholder="(€)" value='<?php echo $data['row'][0]->cijena_posezona_od;?>'>
                                          </div>
                                          <div class="col-sm-3">
                                           <p> DO: </p> <input type="text" class="form-control" name="cijena_posezona_do" placeholder="(€)" value='<?php echo $data['row'][0]->cijena_posezona_do;?>'>
                                          </div>
                                    </div>
                                 
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Klima: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="klima" value='<?php echo $data['row'][0]->klima;?>'>
                                                <option value='<?php echo $data['row'][0]->klima;?>'><?php echo $data['row'][0]->klima;?></option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">SAT TV: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="sat_tv" value='<?php echo $data['row'][0]->sat_tv;?>'>
                                                <option value='<?php echo $data['row'][0]->sat_tv;?>'><?php echo $data['row'][0]->sat_tv;?></option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">WIFI: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="wifi" value='<?php echo $data['row'][0]->wifi;?>'>
                                                <option value='<?php echo $data['row'][0]->wifi;?>'><?php echo $data['row'][0]->wifi;?></option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Parking: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="parking" value='<?php echo $data['row'][0]->parking;?>'>
                                                <option value='<?php echo $data['row'][0]->parking;?>'><?php echo $data['row'][0]->parking;?></option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Udaljenost plaža: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="udaljenost_plaza" placeholder="u metrima" value='<?php echo $data['row'][0]->udaljenost_plaza;?>'>
                                          </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Udaljenost centar: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="udaljenost_centar" placeholder="u metrima" value='<?php echo $data['row'][0]->udaljenost_centar;?>'>
                                          </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Udaljenost trgovina: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="udaljenost_trgovina" placeholder="u metrima" value='<?php echo $data['row'][0]->udaljenost_trgovina;?>'>
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Terasa: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="terasa" value='<?php echo $data['row'][0]->terasa;?>'>
                                                <option value='<?php echo $data['row'][0]->terasa;?>'><?php echo $data['row'][0]->terasa;?></option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Pogled na more: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="pogled_more" value='<?php echo $data['row'][0]->pogled_more;?>'>
                                                <option value='<?php echo $data['row'][0]->pogled_more;?>'><?php echo $data['row'][0]->pogled_more;?></option> 
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
                                        <input type="text" class="gllpLatitude form-control" name="lon" value="<?php echo $data['row'][0]->lon;?>"/>
                                      </div>
                                      <div class="col-sm-4">
                                        <input type="text" class="gllpLongitude form-control" name="lat" value="<?php echo $data['row'][0]->lat;?>"/>
                                      </div>
                                      <div class="col-md-2">
                                        <label class="control-label">Zoom: </label>
                                      </div>
                                      <div class="col-md-2">
                                        <input type="text" class="gllpZoom form-control" value="16"/>
                                      </div>
                                        <div class="col-md-4"><input type="button" class="gllpUpdateButton form-control" value="Ažuriraj kartu">
                                      </div>
                                      <br/>
                                    </fieldset>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-12"><p><strong>UPUTA:</strong> Ispod se nalaze slike koje su dodane uz vaš apartman, ukoliko želite zamjeniti neku od njih, odaberite ispod svake zamjenu slike. </p></div>
                                      <div class="col-md-4 apartman_img">
                                          <img src='<?php echo DIR . $data['row'][0]->img;?>' />

                                          <br />
                                           <input class="form-control" type="file" name="img[]"  value='<?php echo $data['row'][0]->img;?>' />
                                      </div>
                                      <div class="col-md-4 apartman_img">
                                          <img src='<?php echo DIR . $data['row'][0]->img_1;?>' />

                                          <br />
                                          <input class="form-control" type="file" name="img_1[]"  value='<?php echo $data['row'][0]->img_1;?>'/>
                                      </div>
                                      <div class="col-md-4 apartman_img">
                                          <img src='<?php echo DIR . $data['row'][0]->img_2;?>' />
                                          <br />
                                          <input class="form-control" type="file" name="img_2[]"  value='<?php echo $data['row'][0]->img_2;?>'/>
                                      </div>
                                    </div>
                             
                                     

                                </div>
                              </div>
                                                
                                <button type="submit" name="submit" class="btn btn-primary">Sačuvaj</button>
                                 
                             </form>
                          </div>
                       </div>

 
                   </div>
                </div> 





          </div><!-- end container-fluid -->
      </div> <!-- end main ,  page-wrapper-->
  </div>  <!-- end wrapper -->