<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','http://my.bookingapp.net/');

//database details ONLY NEEDED IF USING A DATABASE
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'minixpro_bookingapp');
define('DB_USER', 'minixpro_booking');
define('DB_PASS', 'i9eht7Ol3GFH');
define('PREFIX', 'app_');

//set prefix for sessions
define('SESSION_PREFIX','dc_');

//optionall create a constant for the name of the site
define('SITETITLE', 'Booking app');

//set the default template
Session::set('template','default');
