@extends('layout')

@section('title', 'Projectos')

@section('breadcrumb')
    {{ Breadcrumbs::render('projects') }}
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="h2">Nuestros Projectos</h1>
    </div>

    <div class="col-md-11" style="height: 20px; border-bottom: groove; margin-left: 20px; margin-bottom: 50px"></div>

    <div class="col-md-12">
        <ul>
            @foreach($projects as $project)
                <li style="list-style: none; margin-left: -30px">
                    <a href="/projects/{{ $project->id }}" style="color: #000;"><h4>{{ $project->title }}</h4></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection