 
  
  <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation" style="  background:#ffbb39;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="background: transparent;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/" style="font-weight: bold; color: #FFFFFF;">Otok Cres</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
       <li><a href="/admin/login" style="font-weight: bold; color: #FFFFFF;">Prijava</a></li>
      <li><a href="/register" style="font-weight: bold; color: #FFFFFF;">Registracija</a></li>
      <li><a href="/subvencije" style="font-weight: bold; color: #FFFFFF;">Subvencije</a></li>

     
    </ul>
   
  </div><!-- /.navbar-collapse --> 
  </div>
</nav>

    <!-- Header -->
    <header>
        <div class="container" style="padding-top: 200px;">
            <div class="row">
                <div class="col-lg-12">
                     <div class="intro-text">

 
  
                         <?php 
               

                          if(isset($error)){
                            foreach ($error as $error) {
                              echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>$error</div>";
                            }
                          }

                         ?>

                           <p>NAPOMENA: Ovo je registracija za subvencije. Sustav se još uvijek razvija. Hvala na razumijevanju.</p>
                           

                             <form class='form-horizontal form-border' action='' method='post' enctype='multipart/form-data'>
                              <div class="row">
                                <div class="col-md-12">
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
                                      <label class="col-sm-3 control-label">Kontakt broj: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="phone" placeholder="Kontakt broj...">
                                        </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">OIB: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="oib" placeholder="OIB...">
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Adresa: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="adresa" placeholder="Adresa...">
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-3 control-label">Broj kreveta koje iznajmljujete: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" name="broj_kreveta" placeholder="Broj kreveta koje iznajmljujete...">
                                        </div>
                                  </div>
                                  </div>

                                 
                                </div>
 
                                 <button type="submit" name="submit" class="btn btn-default" style="float: right;">Spremi</button>
                                 
                             </form>
 

                     </div>
                </div>
            </div>
        </div>
    </header> 
