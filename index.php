<?php
session_start();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require 'controller/controller.php';

require 'router/router.php';

$router = new router();

$router->get('/', 'login');

$router->get('/signup', 'signup');

$router->get('/signup_user', 'signupLogic');

$router->post('/loginCheck', 'loginCheck');

$router->post('/home', 'home');

$router -> post('/report','report');

$router -> post('/income','income');




$router->routing();