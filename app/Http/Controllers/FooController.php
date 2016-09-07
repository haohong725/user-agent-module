<?php

namespace App\Http\Controllers;
use App\Utils\MoMobileDetect;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;


/**
 * @SWG\Info(title="Mochant API", version="0.1")
 */

class FooController extends Controller
{
    public function bar(Request $request)
    {
        $ua = $request->getContent();
        
        $detect = new MoMobileDetect();
        $detect->setUserAgent($ua);

        $info = $detect->info();

        dd($info);
    }
}