<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('App\Controllers\Front\Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('/',['namespace'=>'App\Controllers\Front'],function($routes){
//No es necesario / porque ya esta especificado la raíz
	$routes->get('', 'Home::index',['as' => 'home']);

});

$routes->group('Auth',['namespace'=>'App\Controllers\Auth'],function($routes){
	//No es necesario / porque ya esta especificado la raíz
		$routes->get('registro', 'Register::index',['as' => 'register']);
		$routes->post('store', 'Register::store');
		$routes->get('login', 'login::index',['as' => 'login']);
	    $routes->post('sigin','login::sigin');
		$routes->get('logout', 'login::logout',['as' => 'logout']);
	});
    //El Filtro Auth permite no ingresar a este controlador al menos que el ususaro se encuentre logeado
	$routes->group('dashboard',['namespace'=>'App\Controllers\dashboard', 'filter' => 'auth'],function($routes){
		//No es necesario / porque ya esta especificado la raíz
			$routes->get('apart', 'apart::index',['as' => 'apartado']);
			$routes->get('calendar', 'calendar::index',['as' => 'calendar']);
			$routes->post('store_apart','calendar::store_apart');

		});	
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
