<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::signup');
$routes->match(['get','post'],'signup', 'Home::signup', ['filter'=>'Noauth']);
$routes->get('/login', 'Home::login', ['filter'=>'Noauth']);
$routes->get('/dashboard', 'Home::dashboard', ['filter'=>'Auth']);
