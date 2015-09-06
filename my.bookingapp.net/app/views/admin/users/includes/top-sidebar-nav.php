<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Booking app</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav"> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $data['user_data'][0]->ime;?>  <?php echo $data['user_data'][0]->prezime;?><b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="dropdown-header">Račun</li>
                      <li><a href="/admin/users/edit/<?php echo $data['user_data'][0]->id_user;?>">Uredi račun</a></li>
                      <li><a href="/admin/logout">Odjava</a></li>                      
                      <li><a href="<?php echo DIR; ?>" target="_blank">Posjeti web</a></li>

                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li><a href="/admin"><i class="fa fa-home"></i>  POČETNA</a></li>
                    <li><a href="/admin/users/edit/<?php echo $data['user_data'][0]->id_user;?>"><i class="fa fa-cogs"></i>  POSTAVKE</a> </li>
                   <!-- <li><a href="/admin/users"><i class="fa fa-user"></i>  UPRAVLJAJ KORISNICMA</a> </li> -->
                    <li class="disabled"><a href="#"><i class="fa fa-users"></i>  GOSTI</a> </li>
                    <li><a href="/admin/guests/addguest"><i class="fa fa-pencil-square-o"></i>  UNOS </a> </li> 
                    <li><a href="/admin/guests"><i class="fa fa-eye"></i>  PREGLED </a> </li>
                    <li class="disabled"><a href="#"><i class="fa fa-home"></i>  APARTMANI</a> </li>
                    <li><a href="/admin/apartments/add"><i class="fa fa-pencil-square-o"></i>  UNOS </a> </li>
                    <li><a href="/admin/apartments"><i class="fa fa-eye"></i>  PREGLED </a> </li>
                    <li class="disabled"><a href="#"><i class="fa fa-ticket"></i>  REZERVACIJE</a> </li>
                    <li><a href="/admin/reservations/add"><i class="fa fa-pencil-square-o"></i>  UNOS </a> </li>
                    <li><a href="/admin/reservations"><i class="fa fa-eye"></i>  PREGLED </a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>