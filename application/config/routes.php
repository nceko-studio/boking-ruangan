<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['profile'] = 'home/profile';
$route['info_ruangan'] = 'home/info_ruangan';

//Login and register
$route['login'] = 'auth/login';
$route['regist'] = 'auth/regist';
$route['logout'] = 'auth/logout';

//User Views
$route['riwayat'] = 'public/histori/riwayat';
$route['boking_ruangan'] = 'public/pendaftaran/boking';

//Pendaftaran Pasien
$route['pendaftaran'] = 'private/pendaftaran';
$route['pendaftaran_lama'] = 'private/pendaftaran/lama';

//Biodata Pasien
$route['data_pasien'] = 'private/pasien';

//Biodata Pasien
$route['biodata_pasien'] = 'private/pasien/biodata';

//Data Ruangan
$route['data_ruangan'] = 'private/ruangan';

//Master Data Ruangan
$route['gedung'] = 'private/master_data/ruangan/gedung';
$route['lantai'] = 'private/master_data/ruangan/lantai';
$route['jenis_ruangan'] = 'private/master_data/ruangan/jenis_ruangan';
$route['group_ruangan'] = 'private/master_data/ruangan/group_ruangan';
$route['kelas_rawatan'] = 'private/master_data/ruangan/kelas_rawatan';
$route['kelompok_ruangan'] = 'private/master_data/ruangan/kelompok_ruangan';

//Master Data Biodata
$route['agama'] = 'private/master_data/biodata/agama';
$route['identitas'] = 'private/master_data/biodata/identitas';
$route['status_kawin'] = 'private/master_data/biodata/status_kawin';
$route['status_pegawai'] = 'private/master_data/biodata/status_pegawai';

//Master Data Pendidikan
$route['jenjang'] = 'private/master_data/pendidikan/jenjang';
$route['jurusan'] = 'private/master_data/pendidikan/jurusan';

//Master Data Unit Kerja
$route['unit_kerja'] = 'private/master_data/unit_kerja';

//Transaksi
$route['pegawai'] = 'private/transaksi/pegawai';
$route['akun'] = 'private/transaksi/akun';

//Laporan
$route['laporan'] = 'private/laporan';