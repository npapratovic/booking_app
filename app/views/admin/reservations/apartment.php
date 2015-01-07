 
  <?php include ('includes/topbar-nav.php'); ?>
    <div class="container-fluid">
      <div class="row">

      <?php include ('includes/sidebar-nav.php'); ?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              
          <div class="row"> 
            <div class="col-md-12 animated fadeInUpBig">


                        <div class="row"> 
                          <div class="col-md-8">
                          </div> 
                          <div class="col-md-2">
                          <a href='/admin/reservations' class="btn btn-info btn-block"> <i class="fa fa-eye"></i>     Sve rezervacije</a>
                                       
                                      <br /><br />
                               
                          </div>
                          <div class="col-md-2">
                          <a href='/admin/reservations/add' class="btn btn-success btn-block"> <i class="fa fa-pencil-square-o"></i>     Dodaj rezervaciju</a>
                                       
                                      <br /><br />
                               
                          </div>
                        </div>



                        <div class="panel-heading">
                           <h3>Pregled rezervacija za apartman: <?php echo $data['perapartment'][0]->name;?></h3>
                        </div>
                        
                        <div class="row">
                          <div col="col-md-11">

                            <div id='calendar'></div>

                          </div>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">

                                 <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                      <th>Redni broj</th>
                                      <th>Gost</th>
                                      <th>Apartman</th> 
                                      <th>Check in</th> 
                                      <th>Check out</th> 
                                      <th>Rezervirano</th>  
                                      <th>Plaćeno</th>
                                      <th>Akcija</th> 

                                    </tr>

                                    <?php if($data['perapartment']){

                                      foreach ($data['perapartment'] as $row) { 
                                        echo "<tr>";
                                        echo "<td>$row->reservation_id</td>";
                                        echo "<td>$row->firstName $row->lastName</td>";
                                        echo "<td>$row->name</td>";
                                        echo "<td>$row->check_in</td>";
                                        echo "<td>$row->check_out</td>";
                                        echo "<td>$row->booking_date</td>";
                                        if ($row->payed == 'DA') {
                                          echo "<td class='payed'>$row->payed</td>"; 
                                        }
                                        else  {
                                          echo "<td class='not_payed'>$row->payed</td>"; 
                                        }
                                        echo "<td><a href='".DIR."admin/reservations/edit/$row->reservation_id' class='btn btn-default'><i class='fa fa-edit'></i>  Uredi</a> 
                                        <a href='".DIR."admin/reservations/delete/$row->reservation_id' class='btn btn-default'><i class='fa fa-trash'></i>  Obriši</a>   <a href='".DIR."admin/reservations/view/$row->reservation_id' class='btn btn-default'><i class='fa fa-eye'></i>  Pregledaj</a> </td>";
                                        echo "</tr>";
                                      }

                                    }

                                    ?>

                                 </table>

                   
                            </div>





                        </div><!-- end panel body -->



                   </div><!-- end content of main container -->
                </div>
          </div>


      </div>
   </div>


   <!-- only for calendar -->
  <script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title' 
       },
      lang: 'hr',
      defaultDate: '2014-11-12',
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: [ 
        {
          title: 'Ime gosta',
          start: '2014-11-04',
          end: '2014-11-04'
        }, 
        {
          title: '  Ime gosta',
          start: '2014-11-09',
          end: '2014-11-09'
        }, 
        {
          title: 'Ime gosta',
          start: '2014-11-12',
          end: '2014-11-15'
        }, 
        {
          title: 'Ime gosta',
          start: '2014-11-18',
          end: '2014-11-19'
        }, 
      ]
    });
    
  });

</script>
 