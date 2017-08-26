<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'DatasController');
$app->post('/create', 'DatasController@create');
$app->get('/read-all', 'DatasController@readAll');
$app->get('/read/{id}', 'DatasController@read');
$app->put('/update', 'DatasController@update');
$app->delete('/delete', 'DatasController@delete');


