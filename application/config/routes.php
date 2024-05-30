<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'invite';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['details/(:any)'] = 'invite/details/$1';