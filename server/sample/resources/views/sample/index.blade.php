@extends('layouts.sample')

@section('title','Index')

@section('menubar')
    @parent 
    インデックスページ
@endsection

@section('content')
    <p>Sample#Index</p>
    <p>Sample#Index</p>
    <p>Sample#Index</p>
    <p>Sample#Index</p>

    @include('components.sample',['component_sample_1'=>'サンプル1サンプル1サンプル1','component_sample_2'=>'サンプル2サンプル2サンプル2'])
    <ul>
    @each('components.item',$data,'mailaddress')
    </ul>

    <p>ViewComposer</p>
    <p>{{$view_message}}</p>
@endsection

@section('footer')
footer
@endsection