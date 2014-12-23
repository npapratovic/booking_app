 
 	<?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          	  
				        <div class="row"> 
				           <div class="col-md-12">
                     <h1>Uređivanje gosta  </h1>

                   <?php 
                    if(isset($error)){
                      foreach ($error as $error) {
                        echo "<p>$error</p>";
                      }
                    }

                   ?>

                     <form action='' method='post'>

                        <p>First name: <input type="text" name="firstName" value='<?php echo $data['row'][0]->firstName;?>'></p>
                        <p>Last name: <input type="text" name="lastName"  value='<?php echo $data['row'][0]->lastName;?>'></p>

                        <p><input name='submit' type='submit' value='update'></p>
                        
                     </form>
                   </div>
                </div>
        </div>


        </div>
   </div>
 