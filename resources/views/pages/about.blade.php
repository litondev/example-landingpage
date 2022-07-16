
@extends('layouts.default')

@section("meta_head")    
    <title>{{config('setting.app_name')}}</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/images/icon/default.png')}}">    
    <meta name="description" content="{{config('setting.description')}}">
    <meta property="og:title" content="{{config('setting.app_name')}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:description" content="{{config('setting.description')}}" />
    <meta property="og:image" content="{{asset('/images/icon/default.png')}}" />
@endsection

@section("content")
<div style="min-height:1000px;min-width:200px"
class="container">Testing</div>
@endsection 

