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
$route['default_controller'] = 'TBLController';
$route['406'] = 'TBLController/notacceptable';
$route['translate_uri_dashes'] = FALSE;

$route['About'] = 'TBLController/about';
$route['Artists'] = 'TBLController/artists';
$route['Artist_Detail/(:any)'] = 'TBLController/artistdetail/$1';
$route['Album_Detail/(:any)/(:any)'] = 'TBLController/albumdetail/$1/$2';
$route['Multimedia/(:any)'] = 'TBLController/multimedia/$1';

$route['TBL_Admin'] = 'AdminController';
$route['Artists_Data'] = 'AdminController/artists_data';
$route['Albums_Data'] = 'AdminController/albums_data';
$route['Songs_Data'] = 'AdminController/songs_data';
$route['Videos_Data'] = 'AdminController/videos_data';
$route['Awards_Data'] = 'AdminController/awards_data';
$route['Films_Data'] = 'AdminController/films_data';

$route['Film_Add'] = 'AdminController/film_add';
$route['Award_Add'] = 'AdminController/award_add';
$route['Video_Add'] = 'AdminController/video_add';
$route['Song_Add'] = 'AdminController/song_add';
$route['Album_Add'] = 'AdminController/album_add';
$route['Artist_Add'] = 'AdminController/artist_add';

$route['Award_Delete/(:num)'] = 'AdminController/award_delete/$1';
$route['Film_Delete/(:num)'] = 'AdminController/film_delete/$1';
$route['Video_Delete/(:num)'] = 'AdminController/video_delete/$1';
$route['Song_Delete/(:num)'] = 'AdminController/song_delete/$1';
$route['Album_Delete/(:num)'] = 'AdminController/album_delete/$1';
$route['Artist_Delete/(:num)'] = 'AdminController/artist_delete/$1';