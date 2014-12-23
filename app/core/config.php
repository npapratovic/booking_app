<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','http://otok-cres.com/');

//database details ONLY NEEDED IF USING A DATABASE
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'pcracuna_booking_app');
define('DB_USER', 'pcracuna_npaprat');
define('DB_PASS', '165044026');
define('PREFIX', 'app_');

//set prefix for sessions
define('SESSION_PREFIX','dc_');

//optionall create a constant for the name of the site
define('SITETITLE', 'Otok Cress | Booking_app');

//set the default template
Session::set('template','default');
