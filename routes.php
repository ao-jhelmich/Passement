<?php
// Landings page
$r->get('/', 'WelcomeController@index');

// Auth routes
$r->get('/login', 'Auth\LoginController@index');
$r->post('/login', 'Auth\LoginController@logIn');
$r->get('/logout', 'Auth\LoginController@logout');
$r->get('/register', 'Auth\RegisterController@index');
$r->post('/register', 'Auth\RegisterController@store');

// Show models
$r->get('/album/{id}', 'AlbumController@index');
$r->get('/artist/{id}', 'ArtistController@index');

// Admin routes
$r->get('/admin', ['AdminController@index', 'NeedsLogin']);


$r->get('/admin/genres', ['Admin\GenreController@index', 'NeedsLogin']);
$r->post('/admin/genres', ['Admin\GenreController@store', 'NeedsLogin']);
$r->get('/admin/genres/create', ['Admin\GenreController@create', 'NeedsLogin']);
$r->get('/admin/genres/edit/{id}', ['Admin\GenreController@edit', 'NeedsLogin']);
$r->post('/admin/genres/delete', ['Admin\GenreController@destroy', 'NeedsLogin']);
$r->post('/admin/genres/edit/{id}', ['Admin\GenreController@update', 'NeedsLogin']);

$r->get('/admin/artists', ['Admin\ArtistController@index', 'NeedsLogin']);
$r->post('/admin/artists', ['Admin\ArtistController@store', 'NeedsLogin']);
$r->get('/admin/artists/create', ['Admin\ArtistController@create', 'NeedsLogin']);
$r->get('/admin/artists/edit/{id}', ['Admin\ArtistController@edit', 'NeedsLogin']);
$r->post('/admin/artists/delete', ['Admin\ArtistController@destroy', 'NeedsLogin']);
$r->post('/admin/artists/edit', ['Admin\ArtistController@update', 'NeedsLogin']);

$r->get('/admin/albums', ['Admin\AlbumController@index', 'NeedsLogin']);
$r->post('/admin/albums', ['Admin\AlbumController@store', 'NeedsLogin']);
$r->get('/admin/albums/create', ['Admin\AlbumController@create', 'NeedsLogin']);
$r->get('/admin/albums/edit/{id}', ['Admin\AlbumController@edit', 'NeedsLogin']);
$r->post('/admin/albums/delete', ['Admin\AlbumController@destroy', 'NeedsLogin']);
$r->post('/admin/albums/edit', ['Admin\AlbumController@update', 'NeedsLogin']);
