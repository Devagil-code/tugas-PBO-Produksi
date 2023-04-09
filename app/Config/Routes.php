<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('create-db', function(){
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('prodplan_db')) {
        echo 'Database created!';
    }
});

$routes->get('login', 'Auth::login');
// $routes->get('/', 'Home::index');
$routes->addRedirect('/', 'home');
$routes->setAutoRoute(true);

$routes->presenter('bahan_baku', ['filter' => 'isLoggedIn']);

// routing ke controller bahan_baku
// $routes->get('bahan_baku', 'Bahan_baku::index');
// $routes->get('bahan_baku/tambah_bahan_baku', 'Bahan_baku::tambah_bahan_baku');
// $routes->post('bahan_baku', 'Bahan_baku::tambah');
// $routes->get('bahan_baku/edit/(:num)', 'Bahan_baku::edit/$1');
// $routes->put('bahan_baku/(:any)', 'Bahan_baku::update/$1');
// $routes->delete('bahan_baku/(:segment)', 'Bahan_baku::delete/$1');


// routing ke controller produksi
$routes->presenter('produksi', ['filter' => 'isLoggedIn']);

// routing ke controller produk
$routes->presenter('produk', ['filter' => 'isLoggedIn']);

// routing ke controller detailproduksi
$routes->presenter('detail_produksi', ['filter' => 'isLoggedIn']);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}