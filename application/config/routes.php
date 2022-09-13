<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "front";
$route['404_override'] = 'error';


/*********** USER DEFINED ROUTES *******************/

/*********** FRONT END *******************/
$route['viewAlumniLogin'] = 'login/viewAlumniLogin';
$route['tampilRegister'] = 'login/tampilRegister';
$route['beritaAlumni'] = 'front/beritaAlumni';
$route['DetailBeritaAlumni/(:num)'] = 'front/DetailBeritaAlumni/$1';
$route['BeritaSekolah'] = 'front/BeritaSekolah';
$route['DetailBeritaSekolah/(:num)'] = 'front/DetailBeritaSekolah/$1';
/*********** END FRONT END *******************/
/*********** Login/Regis/Diskusi Alumni *******************/
$route['regisAlumni'] = 'login/regisAlumni';
$route['loginAlumni'] = 'login/loginAlumni';
$route['logoutAlumni'] = 'login/logoutAlumni';
$route['dashboardAlum'] = 'alumni';
$route['profileAlumni'] = 'alumni/profileAlumni';
$route['editProfile'] = 'alumni/editProfile';
$route['ChangePasswordAlumni'] = 'alumni/ChangePasswordAlumni';
$route['TambahBeritaAlumni'] = 'alumni/TambahBeritaAlumni';
$route['tambahdiskusi'] = 'alumni/tambahdiskusi';
$route['listBeritaAlumni'] = 'alumni/listBeritaAlumni';
$route['deleteBeritaAlumni/(:any)'] = 'alumni/deleteBeritaAlumni/$1';
$route['editBerita/(:num)'] = 'alumni/editBerita/$1';
$route['dataAlumni'] = 'alumni/dataAlumni';
$route['detailProfilAlumni/(:num)'] = 'alumni/detailProfilAlumni/$1';

/*********** END *******************/


/***********  Alumni Controler User *******************/
$route['alumni'] = 'user/alumni';
$route['tambah_alumni'] = "user/tambah_alumni";
$route['newAlumni'] = "user/newAlumni";
$route['detailAlum/(:num)'] = "user/detailAlum/$1";
$route['deleteAlumni/(:any)'] = "user/deleteAlumni/$1";
$route['updateStatusAlumni'] = "user/updateStatusAlumni";
$route['prosesupdate'] = 'user/prosesupdate';
$route['BeritaAlumni'] = 'user/BeritaAlumni';
$route['updateStatusBerita'] = "user/updateStatusBerita";
$route['DetailDataBeritaAlumni/(:num)'] = "user/DetailDataBeritaAlumni/$1";
$route['KategoriBeritaAlumni'] = 'user/KategoriBeritaAlumni';
$route['deleteKategoriAlumni/(:any)'] = 'user/deleteKategoriAlumni/$1';
$route['TambahKategori'] = 'user/TambahKategori';
$route['beritasekolah'] = 'user/beritasekolah';
$route['TambahBeritaSekolah'] = 'user/TambahBeritaSekolah';
$route['saveBeritaSekolah'] = 'user/saveBeritaSekolah';
$route['EditBeritaSekolah/(:num)'] = 'user/EditBeritaSekolah/$1';
$route['deleteBeritaSekolah/(:any)'] = "user/deleteBeritaSekolah/$1";
$route['StatusBeritaSekolah'] = "user/StatusBeritaSekolah";
$route['KategoriBeritaSekolah'] = 'user/KategoriBeritaSekolah';
$route['deleteKategoriSekolah/(:any)'] = 'user/deleteKategoriSekolah/$1';
$route['TambahKategoriSekolah'] = 'user/TambahKategoriSekolah';
/*********** END *******************/


$route['login'] = 'login';
$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNewUser'] = "user/addNewUser";
$route['addNew'] = "user/addNew";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";

$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['checkEmailAlumni'] = "user/checkEmailAlumni";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

/* End of file routes.php */
/* Location: ./application/config/routes.php */