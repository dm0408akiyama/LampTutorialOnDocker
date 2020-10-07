<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SampleController extends Controller
{
    public function index(Request $request, Response $response){ /*メソッドインジェクション*/
        return <<<EOF
<html><body><h1>samplecontroller</h1><h3>request</h3><pre>{$request}</pre><h3>response</h3><pre>{$response}</pre></body></html>

EOF;
    }
}
