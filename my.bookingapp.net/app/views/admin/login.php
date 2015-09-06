 


<section id="login-container animated fadeIn">

        <div class="row">
            <div class="col-md-3 col-xs-8" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">     
                           Prijava u sustav
                        </h3>      
                    </div>
                    <div class="panel-body">
                         <form class="form-horizontal" role="form" action="" method="post">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Korisničko ime">
                                 </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                 </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                    <input class="btn btn-primary btn-block" type='submit' name='submit' value='Prijava'> 
                                    <hr>
                                 </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                   <a class="btn btn-primary btn-block" href="http://my.bookingapp.net/">Povratak na naslovnu</a>
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-md-12">
                                   <a class="btn btn-primary btn-block" href="<?php echo DIR; ?>register"><?php echo 'Registracija'; ?></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>