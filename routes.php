<?php
// Landings page
$r->get('/', 'WelcomeController@index');

// Auth routes
$r->get('/login', 'Auth\LoginController@index');
$r->post('/login', 'Auth\LoginController@logIn');

$r->get('/register', 'Auth\RegisterController@index'); // @TODO make class and shit
$r->post('/register', 'Auth\RegisterController@store'); // @TODO make class and shit

// $r->post('/logout', 'Auth\LogoutController@logOut'); // @TODO make class and shit


$r->get('/home', ['HomeController@index', 'NeedsLogin']);