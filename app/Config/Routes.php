<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/'                     , 'ProcessController::index');
$routes->get('page-register-user'    , 'ProcessController::page_register');
$routes->post('insert-user'          , 'ProcessController::insert');
$routes->get('page-login-user'       , 'ProcessController::page_login');
$routes->post('login-user'           , 'ProcessController::login');
$routes->get('page-home-user'        , 'ProcessController::page_home');

























// $routes->get('page-login-admin'      , 'ProcessController::page_login_admin');
// $routes->get('page-home-user'        , 'ProcessController::page_home_user');

