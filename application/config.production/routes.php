<?php

defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'Auth';
$route['Change%(:any)'] = 'Systems/Change/';
$route['keluaran_detail'] = 'Applications/Toto/Keluaran/Detail/';
$route['Setting%20Profile'] = 'Systems/Profile/';
$route['Dashboard'] = 'Applications/Dashboard/index/';
$route['Signin'] = 'Auth/index/';
$route['404_override'] = 'Error_404';
//=====================================finance========================================
$route['finance'] = 'Applications/Finance/Dashboard/index/';
//=====================================finance========================================
$route['translate_uri_dashes'] = false;
