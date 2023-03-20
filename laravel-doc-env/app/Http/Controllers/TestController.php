<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    public function testMethod() {
        $environment = env('APP_ENV', false);

        if (App::environment(['staging','production']))
        {
            $env = "True";
        }
        else
        {
            $env = "local";
        }

        return view('welcome',compact('environment','env'));
    }
}
