<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SampleController extends Controller
{
    /*public function index(Request $request, Response $response){ メソッドインジェクション*/
    /*public function index($id='no number'){
        $data = [
            'msg'=>'コントローラーから渡されたメッセージです。',
            'id'=>$id
    ]; 
        return view('sample.index',$data);
    }
}*/
public function index(){
    $data = [
        'msg'=>'名前を入力してください。',
        /*'id'=>$request->id*/
]; 
    return view('sample.index',$data);
}
public function post(Request $request){
        $msg = $request->msg;

        $data = [
            'msg'=>'こんにちは、'.$msg.'さん！',
    ];
    return view('sample.index',$data);
}
}
