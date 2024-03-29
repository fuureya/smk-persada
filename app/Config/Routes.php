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
$routes->get('/', 'Home::index');
$routes->get('/gallery', 'Home::gallery');

$routes->get('/about', function(){
    $data = ["title" => "About"];
    return view('about', $data);
});

$routes->get('/kontak-kami', function(){
    $data = ["title" => "Kontak Kami"];
    return view('kontak-kami', $data);
});




// route smk 

$routes->get('/daftarsmk', "PendaftarSmkController::index");
$routes->post('/daftarsmk', "PendaftarSmkController::smkInsert");
$routes->get('/hapus/(:segment)/delete', "PendaftarSmkController::smkDelete/$1", ["filter" => "AdminFilters"]);
$routes->get('/edit/(:segment)', "PendaftarSmkController::getDataEdit/$1", ["filter" => "AdminFilters"]);
$routes->post('/edit/(:segment)', "PendaftarSmkController::smkEdit/$1", ["filter" => "AdminFilters"]);
// route smp
$routes->get('/daftarsmp', "PendaftarSmpController::smp");
$routes->post('/daftarsmp', "PendaftarSmpController::insertSmp");
$routes->get('/adminsmp', 'PendaftarSmpController::viewSmp', ["filter" => "AdminFilters"]);
$routes->get('/hapus/(:segment)/hapus', "PendaftarSmpController::smpDelete/$1", ["filter" => "AdminFilters"]);
$routes->get('/editsmp/(:segment)', "PendaftarSmpController::getEditSmp/$1", ["filter" => "AdminFilters"]);
$routes->post('/editsmp/(:segment)', "PendaftarSmpController::editSmp/$1", ["filter" => "AdminFilters"]);

// login route & filter login
$routes->get('/login', "LoginController::index", ['filter' => 'TelahLoginFilter']);
$routes->post('/login', "LoginController::login");
$routes->get('/admin', 'PendaftarSmkController::viewSmk', ["filter" => "AdminFilters"]);
$routes->get('/logout', 'LoginController::logout', ["filter" => "LogoutFilters"]);

// route admin & nonadmin
$routes->get('/guestsmk', "PendaftarSmkController::viewGuestSmk", ["filter" => "AdminFilters"]);
$routes->get('/guestsmp', "PendaftarSmpController::viewGuestSmp", ["filter" => "AdminFilters"]);

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



