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
Router::get('admin/guests/view/(:num)', 'guests@view');
Router::post('admin/guests/view/(:num)', 'guests@view');
Router::get('admin/guests/delete/(:num)', 'guests@deleteGuest');

//Apartments
Router::get('admin/apartments', 'apartments@apartments');
Router::get('admin/apartments/add', 'apartments@add');
Router::post('admin/apartments/add', 'apartments@add'); 
Router::get('admin/apartments/edit/(:num)', 'apartments@edit');
Router::post('admin/apartments/edit/(:num)', 'apartments@edit');
Router::get('admin/apartments/view/(:num)', 'apartments@view');
Router::post('admin/apartments/view/(:num)', 'apartments@view');
Router::get('admin/apartments/delete/(:num)', 'apartments@delete');


//Reservations
Router::get('admin/reservations', 'reservations@reservations');
Router::get('admin/reservations/add', 'reservations@add');
Router::post('admin/reservations/add', 'reservations@add'); 
Router::get('admin/reservations/edit/(:num)', 'reservations@edit');
Router::post('admin/reservations/edit/(:num)', 'reservations@edit');
Router::get('admin/reservations/view/(:num)', 'reservations@view');
Router::post('admin/reservations/view/(:num)', 'reservations@view');
Router::get('admin/reservations/delete/(:num)', 'reservations@delete');
Router::get('admin/reservations/apartment/(:num)', 'reservations@perApartment');
Router::post('admin/reservations/apartment/(:num)', 'reservations@perApartment'); 

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();

