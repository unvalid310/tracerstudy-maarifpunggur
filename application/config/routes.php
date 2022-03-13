<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 	= "home/beranda";
$route['404_override'] 			= '';

$route['berita'] 			= "home/berita/list";
$route['berita/(:any)'] 	= "home/berita/list/$1";
$route['view/berita/(:any)'] 	= "home/berita/view/$1";
$route['archive/(:any)/(:num)'] 	= "home/berita/archive/$1/$2";

$route['informasi'] 			= "home/informasi/list";
$route['informasi/(:any)'] 		= "home/informasi/list/$1";
$route['view/informasi/(:any)'] 	= "home/informasi/view/$1";

$route['cms-admin'] 						= 'administrator/dashboard';

$route['cms-admin/kuesioner-alumni/kategori'] 						= 'administrator/kues_alumni/kategori';
$route['cms-admin/kuesioner-alumni/kuesioner'] 						= 'administrator/kues_alumni/kuesioner';
/* Alumni  */
$route['cms-admin/alumni'] 					= 'administrator/alumni';
$route['cms-admin/alumni/create'] 			= 'administrator/alumni/create';
$route['cms-admin/alumni/update/(:any)'] 	= 'administrator/alumni/update/$1';
$route['cms-admin/alumni/tool/jurusan'] 			= 'administrator/alumni_tools/jurusan';
$route['cms-admin/alumni/tool/import'] 			= 'administrator/alumni_tools/import';
/* daftar instansi */
$route['cms-admin/instansi'] 				= 'administrator/instansi';
/* survey */
$route['cms-admin/kegiatan']					= 'administrator/kegiatan';
$route['cms-admin/kebutuhan']					= 'administrator/kebutuhan';
$route['cms-admin/kesesuaian']					= 'administrator/kesesuaian';
$route['cms-admin/penilaian'] 					= 'administrator/penilaian';
/* user  */
$route['cms-admin/pengguna'] 					= 'administrator/user';
/** admin **/
$route['cms-admin/admin'] 					= 'administrator/admin';
/** content **/
$route['cms-admin/berita'] 					= 'administrator/berita';
$route['cms-admin/berita/create'] 			= 'administrator/berita/create';
$route['cms-admin/berita/update/(:any)'] 	= 'administrator/berita/update/$1';

$route['cms-admin/informasi'] 					= 'administrator/informasi';
$route['cms-admin/informasi/create'] 			= 'administrator/informasi/create';
$route['cms-admin/informasi/update/(:any)'] 	= 'administrator/informasi/update/$1';

$route['auth/login']						= 'auth/auth';
$route['auth/signup-instansi']				= 'auth/auth/signUpInstansi';
$route['auth/signup-alumni']				= 'auth/auth/signUpAlumni';

/* alumni */
$route['alumni'] 							= 'alumni/dashboard';
$route['alumni/kegiatan']					= 'alumni/kegiatan';
$route['alumni/kebutuhan']					= 'alumni/kebutuhan';
$route['alumni/kesesuaian']					= 'alumni/kesesuaian';
$route['kuesioner'] 						= 'alumni/kuesioner';
$route['alumni/kuesioner'] 					= 'alumni/kuesioner/status_kuesioner';
$route['alumni/profile'] 					= 'alumni/profile';
$route['alumni/penilaian'] 					= 'alumni/penilaian';

/* instansi */
$route['instansi'] 								= 'instansi/dashboard';
$route['instansi/kegiatan']						= 'instansi/kegiatan';
$route['instansi/kebutuhan']					= 'instansi/kebutuhan';
$route['instansi/kesesuaian']					= 'instansi/kesesuaian';
$route['instansi/penilaian'] 					= 'instansi/penilaian';
$route['instansi/penilaian/daftar-penilaian'] 	= 'instansi/penilaian/penilaianDaftar';
$route['instansi/kuesioner'] 					= 'instansi/kuesioner/status_kuesioner';
$route['instansi/profile'] 						= 'instansi/profile';
$route['instansi/alumni'] 						= 'instansi/alumni';
/* End of file routes.php */
/* Location: ./application/config/routes.php */