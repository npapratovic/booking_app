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
         echo "$row->end";
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