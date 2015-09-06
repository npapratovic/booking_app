<?php
require('app/core/autoloader.php');



//define routes
//Router::get('', 'welcome@index'); 
Router::get('', 'portal@index');

Router::post('register', 'register@index');
Router::get('register', 'register@index');
Router::post('subvencije', 'register@subvencije');
Router::get('subvencije', 'register@subvencije');
Router::post('thankyou', 'register@thankyou');
Router::get('thankyou', 'register@thankyou');
Router::get('admin', 'admin@admin');
Router::get('admin/login', 'admin@login');
Router::post('admin/login', 'admin@login');
Router::get('admin/logout', 'admin@logout');
Router::get('admin/viewaccomodation', 'accomodation/viewaccomodation@index');
Router::get('admin/viewguests', 'guests/viewguests@index');

//Portal
Router::get('portal', 'portal@index');
Router::post('portal', 'portal@index');
Router::get('portal/single', 'portal/portal@single');
Router::post('portal/single', 'portal/portal@single'); 
Router::get('portal/view/(:num)', 'portal@view');
Router::get('portal/search', 'portal@search'); 
Router::get('portal/search/city-all/(:any)', 'portal@searchbytype'); 
Router::get('portal/search/type-all/(:any)', 'portal@searchbycity'); 
Router::get('portal/search/(:any)/(:any)', 'portal@searchbycityandtype'); 
 
//Users
Router::get('admin/users', 'users@users');
Router::get('admin/users/user-groups', 'groups@user_groups');
Router::get('admin/users/user-groups/delete-user-group/(:num)', 'groups@delete');
Router::get('admin/users/user-groups/add-user-group', 'groups@add');
Router::post('admin/users/user-groups/add-user-group', 'groups@add'); 
Router::get('admin/users/user-groups/edit-user-group/(:num)', 'groups@edit');
Router::post('admin/users/user-groups/edit-user-group/(:num)', 'groups@edit'); 
Router::get('admin/users/user-groups/delete/(:num)', 'groups@delete');
 
Router::get('admin/users/add', 'users@add');
Router::post('admin/users/add', 'users@add'); 
Router::get('admin/users/edit/(:num)', 'users@edit');
Router::post('admin/users/edit/(:num)', 'users@edit');
Router::get('admin/users/view/(:num)', 'users@view');
Router::post('admin/users/view/(:num)', 'users@view');
Router::get('admin/users/delete/(:num)', 'users@delete');

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
Router::get('admin/reservations/feed/(:num)', 'reservations@feedPerApartment'); 

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();

