    <?php if($data['json_feed']){
     	echo "[";
      foreach ($data['json_feed'] as $row) {   
         echo "{";
         echo '"';
         echo 'start';
         echo '":';
         echo '"';
         echo "$row->start";
         echo '",'; 
         echo '"'; 
         echo 'end';
         echo '":';
         echo '"';
         $date = $row->end;  
         $stop_date = $row->end;
 		 $stop_date = date('Y-m-d', strtotime($stop_date . ' + 1 day'));
  		 echo "$stop_date";
         echo '",';
         echo '"'; 
         echo 'title';
         echo '":';
         echo '"';
         echo "$row->firstName";
         echo " $row->lastName";
         echo '",';
         echo '"overlap":';
         echo '"false",';
         echo '"rendering":';
         echo '"background",';
         echo '"color":';
         echo '"#ff9f89"';  
         echo "},";        
        }

         echo "{";
         echo '"';
         echo 'start';
         echo '":';
         echo '"';
         echo "1990-01-01";
         echo '",'; 
         echo '"'; 
         echo 'end';
         echo '":';
         echo '"';
         echo "1990-01-01";
         echo '",';
         echo '"overlap":';
         echo '"false",';
         echo '"rendering":';
         echo '"background",';
         echo '"color":';
         echo '"#ff9f89"';  
         echo "}";   
         echo "]";
       } 
   ?>