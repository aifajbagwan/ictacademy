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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//My edits

$route['default_controller'] = 'home';
// $route['home'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//home pages
$route['about'] = 'home/about';
// $route['ret'] = 'home';
$route['home'] = 'home';
$route['President'] = 'home/pm';
$route['vision-mission'] = 'home/vm';
$route['our-team'] = 'home/ot';
$route['our-role'] = 'home/or';
$route['activity-report'] = 'home/ar';
$route['pai'] = 'home/pai';
$route['paia'] = 'home/paia';
$route['aboutpairobochamp'] = 'home/aboutpairobochamp';
$route['rr'] = 'home/rr';
$route['ccce'] = 'home/ccce';
$route['gop'] = 'home/gop';
$route['icts'] = 'home/icts';
$route['el'] = 'home/el';
$route['ms'] = 'home/ms';
$route['cl'] = 'home/cl';
$route['gft'] = 'home/gft';
$route['sfe'] = 'home/sfe';
$route['sfe2'] = 'home/sfe2';
$route['hs'] = 'home/hs';
$route['rsl'] = 'home/rsl';
$route['rsl2'] = 'home/rsl2';
$route['gallery'] = 'home/gallery';
$route['contact'] = 'home/contact';
$route['cs'] = 'home/cs';
$route['ss'] = 'home/ss';
$route['hardware'] = 'home/hardware';
