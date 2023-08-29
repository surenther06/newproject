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
$route['signup'] = 'welcome/signup';
$route['singlepage'] = 'welcome/singlepage';
$route['aboutus'] = 'welcome/aboutus';
$route['signin'] = 'welcome/signin';
$route['login_page'] = 'auth/index';
$route['login'] = 'auth/login';

$route['admin/login'] = 'admin/index';
$route['admin/user_login'] = 'admin/user_login';
$route['admin/logout'] = 'admin/logout';
$route['admin/dashboard'] = 'admin/dashboard';

$route['admin/jobs'] = 'jobs';
$route['admin/job/add'] = 'jobs/add_page';
$route['admin/job/size/add'] = 'jobs/add_sizes';
$route['admin/job/create'] = 'jobs/create';
$route['admin/jobs/download/:id'] = 'jobs/download';

$route['admin/upcoming'] = 'customers';
$route['admin/upcoming/add'] = 'customers/add_page';
$route['admin/upcoming/create'] = 'customers/create';
$route['admin/upcoming/status'] = 'customers/status';
$route['admin/upcoming/edit/:id'] = 'customers/edit';
$route['admin/upcoming/update'] = 'customers/update';
$route['admin/upcoming/remove'] = 'customers/remove';

$route['admin/course'] = 'colors';
$route['admin/course/add'] = 'colors/add_page';
$route['admin/course/create'] = 'colors/create';
$route['admin/course/status'] = 'colors/status';
$route['admin/course/edit/:id'] = 'colors/edit';
$route['admin/course/update'] = 'colors/update';
$route['admin/course/remove'] = 'colors/remove';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;