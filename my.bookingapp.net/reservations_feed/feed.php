<?php
// - standalone json feed -
 
	header('Content-Type:application/json');
  
    $db = mysql_connect("localhost","pcracuna_npaprat","165044026");
    if (!$db) {
        die('Could not connect to db: ' . mysql_error());
    }
 
    //Select the Database
    mysql_select_db("pcracuna_booking_app",$db);
    
    //Replace * in the query with the column names.
    $result = mysql_query("select * from app_reservations", $db);  
    
    //Create an array
    $json_response = array();
    
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row_array['start'] = $row['check_in'];
        $row_array['end'] = $row['check_out'];
        $row_array['overlap'] = 'false';
        $row_array['rendering'] = 'background';
        $row_array['color'] = '#ff9f89';
         
        //push the values in the array
        array_push($json_response,$row_array);
    }
    echo json_encode($json_response);
    
  
exit;


?>