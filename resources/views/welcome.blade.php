@extends('layout')

@section('title', 'Home Page')

@section('breadcrumb')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="h2" style="text-align: center">YOU HAVE TO WAIT, HUMAN...</h1>
        </div>

        <div class="col-md-11" style="height: 5px; border-bottom: groove; margin-left: 20px; margin-bottom: 10px"></div>

        <div class="col-md-12" style="margin-left: 200px">
            <img src="/img/cat.png" style="max-width: 75%; max-height: 75%">
        </div>
    </div>
@endsection