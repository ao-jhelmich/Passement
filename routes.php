<?php
// Landings page
$r->get('/', 'WelcomeController@index');

// Auth routes
$r->get('/login', 'Auth\LoginController@index');
$r->post('/login', 'Auth\LoginController@logIn');
$r->get('/logout', 'Auth\LoginController@logout');
$r->get('/register', 'Auth\RegisterController@index'); // @TODO make class and shit
$r->post('/register', 'Auth\RegisterController@store'); // @TODO make class and shit

// Admin routes
$r->get('/admin', ['AdminController@index', 'NeedsLogin']);
$r->get('/admin/genres', ['GenreController@index', 'NeedsLogin']);
$r->post('/admin/genres', ['GenreController@store', 'NeedsLogin']);
$r->get('/admin/genres/create', ['GenreController@create', 'NeedsLogin']);
$r->get('/admin/genres/edit', ['GenreController@edit', 'NeedsLogin']);

$r->post('/admin/genres/delete', ['GenreController@destroy', 'NeedsLogin']);
$r->post('/admin/genres/edit', ['GenreController@update', 'NeedsLogin']);
