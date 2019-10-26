<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home/(:num)'] = 'Home/index/$1';
$route['cthanks'] = 'ClientPanel/Cthanks/index';
$route['cthanks/(:num)'] = 'ClientPanel/Cthanks/index/$1';

// for ClientPanel

$route['login'] = 'ClientPanel/Login';
$route['logout'] = 'ClientPanel/Login/logout';
$route['login/clientAuth'] = 'ClientPanel/Login/clientAuth';
$route['CDashboard'] = 'ClientPanel/CDashboard';
$route['booking'] = 'ClientPanel/Booking/index';
$route['booking/send'] = 'ClientPanel/Booking/store';
$route['booking/(:num)'] = 'ClientPanel/Booking/index/$1';
$route['new_report'] = 'ClientPanel/New_report/index';

$route['payment_info'] = 'ClientPanel/Payment_info/index';
$route['merchant_profile'] = 'ClientPanel/Merchant_profile/index/';
$route['merchant_profile/(:num)'] = 'ClientPanel/Merchant_profile/index/$1';
$route['merchant_profile/update'] = 'ClientPanel/Merchant_profile/update';
$route['tickets'] = 'ClientPanel/Tickets/index';
$route['tickets/(:num)'] = 'ClientPanel/Tickets/index/$1';

//  FOR BACKEND

$route['Backend'] = 'Backend/Login/index/';
$route['Backend/dashboard/'] = 'Backend/Dashboard/index/';
$route['Backend/login/'] = 'Backend/Login/index/';
$route['Backend/login/logout/'] = 'Backend/Login/logout/';
$route['Backend/register/'] = 'Backend/Register/index/';
$route['Backend/promoCode/'] = 'Backend/PromoCode/index/';
$route['Backend/promoCode/(:num)'] = 'Backend/PromoCode/index/$1';

$route['Backend/promoCodeView/'] = 'Backend/PromoCodeView/index/';
$route['Backend/promoCodeView/(:num)'] = 'Backend/PromoCodeView/index/$1';
$route['Backend/promoCodeView/edit'] = 'Backend/PromoCodeView/edit';
$route['Backend/booking'] = 'Backend/Booking/index';
$route['Backend/cashMemo'] = 'Backend/CashMemo/index';
$route['Backend/payment'] = 'Backend/Payment/index';