@extends('layout')

@section('breadcrumb')
{{ Breadcrumbs::render('about') }}
@endsection

@section('title' , 'About page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="h2">Sobre Nosotros</h1>
        </div>

        <div class="col-md-11" style="height: 20px; border-bottom: groove; margin-left: 20px; margin-bottom: 50px"></div>

        <div class="col-md-12">

        </div>
    </div>
@endsection