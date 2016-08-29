<?php

$app->get('/swagger/swagger.json', [
    'as' => 'swagger.index',
    'uses' => 'SwaggerController@json',
]);

$app->get('/', [
    'as' => 'swagger.ui',
    'uses' => 'SwaggerController@ui',
]);
