<?php

$app->post('/foo/bar', [
    'as' => 'foo.bar',
    'uses' => 'FooController@bar',
]);

$app->get('/swagger/swagger.json', [
    'as' => 'swagger.index',
    'uses' => 'SwaggerController@json',
]);

$app->get('/', [
    'as' => 'swagger.ui',
    'uses' => 'SwaggerController@ui',
]);