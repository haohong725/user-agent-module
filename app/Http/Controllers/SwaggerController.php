<?php

namespace App\Http\Controllers;


class SwaggerController extends Controller
{
    public function json()
    {
        $swagger = \Swagger\scan(__DIR__.'/../');
        header('Content-Type: application/json');
        echo $swagger;
    }

    public function ui()
    {
        return redirect('/static/swagger/index.html');
    }
}