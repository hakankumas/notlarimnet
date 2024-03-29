<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/'                          , 'ProcessController::index');
$routes->get('page-register-user'         , 'ProcessController::page_register');
$routes->post('insert-user'               , 'ProcessController::insert');
$routes->get('page-login-user'            , 'ProcessController::page_login');
$routes->post('login-user'                , 'ProcessController::login');
$routes->get('page-home-user'             , 'ProcessController::page_home');
$routes->get('logout-user'                , 'ProcessController::logout');

$routes->post('create-note'               , 'ProcessController::create_note');
$routes->post('update-note'               , 'ProcessController::update_note');
$routes->post('hide-note'                 , 'ProcessController::hide_note');
$routes->post('delete-note'               , 'ProcessController::delete_note');
$routes->get('hidden-note/(:num)'         , 'ProcessController::hidden_note/$1');
$routes->get('hiddenDelete-note/(:num)'   , 'ProcessController::hiddenDelete_note/$1');


