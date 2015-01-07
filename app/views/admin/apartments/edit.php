 
 	<?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          	  


                <div class="row"> 
                   <div class="col-md-12 animated fadeInUpBig">
                      <div class="panel panel-default">
                         <div class="panel-heading">
                                      <h3 class="panel-title">Uređivanje apartmana</h3> 
                          </div>

                          <div class="panel-body">

                           <?php 
                            if(isset($error)){
                              foreach ($error as $error) {
                                echo "<p>$error</p>";
                              }
                            }

                           ?>

                             <form class="form-horizontal form-border" action='' method='post' enctype='multipart/form-data'>
                              <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Ime: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="name" placeholder="Ime..." value='<?php echo $data['row'][0]->name;?>'>
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
                                        <label class="col-sm-3 control-label">Cijena predsezona: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="cijena_predsezona" placeholder="Cijena presezona (€)" value='<?php echo $data['row'][0]->cijena_predsezona;?>'>
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Cijena sezona: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="cijena_sezona" placeholder="Cijena sezona (€)" value='<?php echo $data['row'][0]->cijena_sezona;?>'>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cijena posezona: </label>
                                          <div class="col-sm-6">
                                            <input type="text" class="form-control" name="cijena_posezona" placeholder="Cijena posezona (€)" value='<?php echo $data['row'][0]->cijena_posezona;?>'>
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Klima: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="klima" value='<?php echo $data['row'][0]->klima;?>'>
                                                <option>Odaberi...</option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">SAT TV: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="sat_tv" value='<?php echo $data['row'][0]->sat_tv;?>'>
                                                <option>Odaberi...</option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">WIFI: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="wifi" value='<?php echo $data['row'][0]->wifi;?>'>
                                                <option>Odaberi...</option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Parking: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="parking" value='<?php echo $data['row'][0]->parking;?>'>
                                                <option>Odaberi...</option> 
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
                                                <option>Odaberi...</option> 
                                                <option value="DA">DA</option>
                                                <option value="NE">NE</option> 
                                            </select> 
                                          </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">Pogled na more: </label>
                                          <div class="col-sm-6">
                                            <select class="form-control" name="pogled_more" value='<?php echo $data['row'][0]->pogled_more;?>'>
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


        </div>


        </div>
   </div>
 