<?php
use App\Controllers\Anasayfa;

$routes->get('/', 'Anasayfa::index');
$routes->match(['get', 'post'], 'login', 'Anasayfa::login'); // Hem GET hem de POST için
$routes->get('panel', 'Panel::index');
$routes->get('logout', 'Anasayfa::logout');
$routes->match(['get', 'post'], 'signup', 'Anasayfa::signup');

$routes->get('iletisim', 'Anasayfa::iletisim');
$routes->get('hakkimizda', 'Anasayfa::hakkimizda');
$routes->get('anasayfa', 'Anasayfa::anasayfa');


$routes->get('hirka', 'Anasayfa::hirka');
$routes->get('bebek', 'Anasayfa::bebek');
$routes->get('bere_eldiven', 'Anasayfa::bere_eldiven');
$routes->get('oyuncak', 'Anasayfa::oyuncak');
$routes->get('dekorasyon', 'Anasayfa::dekorasyon');

//$routes->get('urunlerimiz', 'Anasayfa::urunlerimiz');

$routes->get('mongo/(:num)', 'Anasayfa::test/$1');
$routes->get('urunlerimiz', 'Anasayfa::urunlerimiz');
//$route['urun_yonetimi'] = 'UrunYonetimi';

$routes->get('cart_view', 'CartController::view');
//$routes->post('add_to_cart', 'CartController::add');
$routes->post('cart/add', 'CartController::add');

//$routes->delete('remove/(:num)', 'CartController::remove/$1');


?>