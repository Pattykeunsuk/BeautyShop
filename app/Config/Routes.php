<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Default route
$routes->get('/', 'Portal\Inicio::index',['as' => 'inicio']);

/**   P O R T A L   **/
$routes->get('/', 'Portal/Inicio::index', ['as'=> 'Inicio']);
$routes->get('/skin', 'Portal/Skin::index', ['as'=> 'Skin']);
$routes->get('/category', 'Portal/Category::index', ['as'=> 'Category']);
$routes->get('/galery', 'Portal/Galery::index', ['as'=> 'Galery']);
$routes->get('/contact', 'Portal/Contact::index', ['as'=> 'Contact']);
$routes->get('/product', 'Portal/Product::index', ['as'=> 'Product']);
$routes->post('/validar_acceso', 'Usuario/Acceso::validar_acceso', ['as'=> 'validar_acceso']);


/**   P A N E L   **/
//Tarea dashboard
$routes->get('/dashboard', 'Panel\Dashboard::index',['as' => 'dashboard']);
//Tarea usuario
$routes->get('/acceso', 'Usuario\Acceso::index',['as' => 'acceso']);


//Tarea calzado
$routes->get('/Make_up', 'Panel\Makeup::index',['as' => 'Make_up']);
$routes->get('/Make_up_nuevo', 'Panel\Calzado_nuevo::index',['as' => 'Make Up Nuevo']);
$routes->get('/calzado_detalles/(:num)', 'Panel\Calzado_detalles::index/$1',['as' => 'calzado_detalles']);

//Tarea perfil
$routes->get('/mi_perfil', 'Panel\Mi_perfil::index',['as' => 'mi_perfil']);

//Tarea Cerrar sesion
$routes->get('/cerrar_sesion', 'Usuario\Cerrar_sesion::index',['as' => 'cerrar_sesion']);
//Usuarios
$routes->get('/usuarios', 'Panel\Usuarios::index', ['as' => 'usuarios']);
$routes->get('/eliminar_usuario/(:num)', 'Panel\Usuarios::eliminar/$1', ['as' => 'eliminar_usuario']);
$routes->get('/estatus_usuario/(:num)/(:num)', 'Panel\Usuarios::estatus/$1/$2', ['as' => 'estatus_usuario']);
$routes->get('/usuario_nuevo', 'Panel\Usuario_nuevo::index', ['as' => 'usuario_nuevo']);
$routes->post('/registrar_usuario', 'Panel\Usuario_nuevo::registrar', ['as' => 'registrar_usuario']);
$routes->get('/detalles_usuario/(:num)', 'Panel\Usuario_detalles::index/$1', ['as' => 'detalles_usuario']);
$routes->post('/editar_usuario', 'Panel\Usuario_detalles::editar', ['as' => 'editar_usuario']);
//Catalogo Dama
$routes->get('/catalogo_dama_panel', 'Panel\Catalogo_dama::index', ['as' => 'catalogo_dama_panel']);
$routes->get('/eliminar_calzado_dama/(:num)', 'Panel\Catalogo_dama::eliminar/$1', ['as' => 'eliminar_calzado_dama']);
//Editar producto
$routes->get('/detalles_maquillaje/(:num)', 'Panel\Maquillaje_detalles::index/$1', ['as' => 'detalles_maquillaje']);
$routes->post('/editar_maquillaje', 'Panel\Maquillaje_detalles::editar', ['as' => 'editar_maquillaje']);
//Nuevo maquillaje
$routes->get('/nuevo_maquillaje', 'Panel\Nuevo_maquillaje::index', ['as' => 'nuevo_maquillaje']);
$routes->post('/registrar_maquillaje', 'Panel\Nuevo_maquillaje::registrar', ['as' => 'registrar_maquillaje']);
//
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
