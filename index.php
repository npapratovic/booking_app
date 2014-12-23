<?php
require('app/core/autoloader.php');

//define routes
Router::get('', 'welcome@index');
Router::get('admin', 'admin@admin');
Router::get('admin/login', 'admin@login');
Router::post('admin/login', 'admin@login');
Router::get('admin/logout', 'admin@logout');
Router::get('admin/viewaccomodation', 'accomodation/viewaccomodation@index');
Router::get('admin/viewguests', 'guests/viewguests@index');


//Guests
Router::get('admin/guests', 'guests@guests');
Router::get('admin/guests/addguest', 'guests@addGuest');
Router::post('admin/guests/addguest', 'guests@addGuest'); 
Router::get('admin/guests/editguest/(:num)', 'guests@editGuest');
Router::post('admin/guests/editguest/(:num)', 'guests@editGuest');
Router::get('admin/guests/deleteguest/(:num)', 'guests@deleteGuest');

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();

