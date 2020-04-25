<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*BEGIN ROUTES CODE*/
$route['admin/dashboard'] = 'admin/dashboard_controller/dashboard';
/*@PRODUK*/
$route['admin/data/produk'] = 'admin/produk_controller/data_produk';
$route['admin/form/tambah/produk'] = 'admin/produk_controller/form_tambah_produk';
$route['admin/proses/tambah/produk'] = 'admin/produk_controller/proses_tambah_produk';
$route['admin/form/ubah/produk/(:num)'] = 'admin/produk_controller/form_ubah_produk/$1';
$route['admin/proses/ubah/produk'] = 'admin/produk_controller/proses_ubah_produk';
$route['admin/proses/hapus/produk/(:num)'] = 'admin/produk_controller/proses_hapus_produk/$1';
/*@LOGO*/
$route['admin/data/logo'] = 'admin/logo_controller/data_logo';
$route['admin/proses/tambah/logo'] = 'admin/logo_controller/proses_tambah_logo';
$route['admin/proses/hapus/logo/(:num)'] = 'admin/logo_controller/proses_hapus_logo/$1';
?>