<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'system';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['data'] = 'system/data';

$route['barang'] = 'barang/index';/* memangil data barang */
$route['barang/tambah'] = 'barang/tambah';/* memangil data barang */
