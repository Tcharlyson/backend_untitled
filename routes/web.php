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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/users'], function () use ($router) {
    /* Users routes */
    $router->get('', ['uses' => 'UsersController@showAllUsers']);
    $router->get('{id}', ['uses' => 'UsersController@showOneUser']);
    $router->post('', ['uses' => 'UsersController@create']);
    $router->delete('{id}', ['uses' => 'UsersController@delete']);
    $router->put('{id}', ['uses' => 'UsersController@update']);
});

$router->group(['prefix' => 'api/groups'], function () use ($router) {
    /* Groups routes */
    $router->get('', ['uses' => 'GroupsController@showAllGroups']);
    $router->get('{id}', ['uses' => 'GroupsController@showOneGroup']);
    $router->post('', ['uses' => 'GroupsController@create']);
    $router->delete('{id}', ['uses' => 'GroupsController@delete']);
    $router->put('{id}', ['uses' => 'GroupsController@update']);
});

$router->group(['prefix' => 'api/emails'], function () use ($router) {
    /* Emails routes */
    $router->get('', ['uses' => 'EmailsController@showAllEmails']);
    $router->get('{id}', ['uses' => 'EmailsController@showOneEmail']);
    $router->post('', ['uses' => 'EmailsController@create']);
    $router->delete('{id}', ['uses' => 'EmailsController@delete']);
    $router->put('{id}', ['uses' => 'EmailsController@update']);
});

$router->group(['prefix' => 'api/phoneNumbers'], function () use ($router) {
    /* PhoneNumbers routes */
    $router->get('', ['uses' => 'phoneNumbersController@showAllphoneNumbers']);
    $router->get('{id}', ['uses' => 'phoneNumbersController@showOnePhoneNumber']);
    $router->post('', ['uses' => 'phoneNumbersController@create']);
    $router->delete('{id}', ['uses' => 'phoneNumbersController@delete']);
    $router->put('{id}', ['uses' => 'phoneNumbersController@update']);
});

$router->group(['prefix' => 'api/types'], function () use ($router) {
    /* Types routes */
    $router->get('', ['uses' => 'TypesController@showAllTypes']);
    $router->get('{id}', ['uses' => 'TypesController@showOneType']);
    $router->post('', ['uses' => 'TypesController@create']);
    $router->delete('{id}', ['uses' => 'TypesController@delete']);
    $router->put('{id}', ['uses' => 'TypesController@update']);
});

$router->group(['prefix' => 'api/custom'], function () use ($router) {
    /* Custom users routes */
    $router->get('users/informations',  ['uses' => 'UsersController@showAllUsersWithInformations']);
    $router->get('users/{id}/informations', ['uses' => 'UsersController@showOneUserWithInformations']);

    /* Custom groups routes */
    $router->get('groups/users', ['uses' => 'GroupsController@showAllGroupsWithUsers']);
    $router->get('groups/{id}/users', ['uses' => 'GroupsController@showOneGroupWithUsers']);

});


