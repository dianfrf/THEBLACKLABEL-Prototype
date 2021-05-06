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
$route['Notice/(:any)'] = 'TBLController/notice/$1';
$route['Notice_Detail/(:any)'] = 'TBLController/noticedetail/$1';
$route['Artists'] = 'TBLController/artists';
$route['Artist_Detail/(:any)'] = 'TBLController/artistdetail/$1';
$route['Album_Detail/(:any)/(:any)'] = 'TBLController/albumdetail/$1/$2';
$route['Releases'] = 'TBLController/releases';
$route['Multimedia/(:any)'] = 'TBLController/multimedia/$1';

$route['TBL_Admin'] = 'AdminController';
$route['Admin_Login'] = 'AdminController/admin_login';
$route['Dashboard'] = 'AdminController/dashboard';
$route['Artists_Data/(:num)'] = 'AdminController/artists_data/$1';
$route['Albums_Data/(:num)'] = 'AdminController/albums_data/$1';
$route['Songs_Data/(:num)'] = 'AdminController/songs_data/$1';
$route['Videos_Data/(:num)'] = 'AdminController/videos_data/$1';
$route['Films_Data/(:num)'] = 'AdminController/films_data/$1';
$route['Awards_Data/(:num)'] = 'AdminController/awards_data/$1';
$route['Notices_Data/(:num)'] = 'AdminController/notices_data/$1';

$route['Film_Add'] = 'AdminController/film_add';
$route['Award_Add'] = 'AdminController/award_add';
$route['Video_Add'] = 'AdminController/video_add';
$route['Song_Add'] = 'AdminController/song_add';
$route['Album_Add'] = 'AdminController/album_add';
$route['Artist_Add'] = 'AdminController/artist_add';
$route['Notice_Add'] = 'AdminController/notice_add';

$route['Award_Delete/(:num)'] = 'AdminController/award_delete/$1';
$route['Film_Delete/(:num)'] = 'AdminController/film_delete/$1';
$route['Video_Delete/(:num)'] = 'AdminController/video_delete/$1';
$route['Song_Delete/(:num)'] = 'AdminController/song_delete/$1';
$route['Album_Delete/(:num)'] = 'AdminController/album_delete/$1';
$route['Artist_Delete/(:num)'] = 'AdminController/artist_delete/$1';
$route['Notice_Delete/(:num)'] = 'AdminController/notice_delete/$1';

$route['Award_Edit'] = 'AdminController/award_edit';
$route['Film_Edit'] = 'AdminController/film_edit';
$route['Video_Edit'] = 'AdminController/video_edit';
$route['Song_Edit'] = 'AdminController/song_edit';
$route['Album_Edit'] = 'AdminController/album_edit';
$route['Artist_Edit'] = 'AdminController/artist_edit';
$route['Notice_Edit'] = 'AdminController/notice_edit';

$route['AlbumDetail/(:num)'] = 'AdminController/album_detail/$1';
$route['ArtistDetail/(:num)'] = 'AdminController/artist_detail/$1';