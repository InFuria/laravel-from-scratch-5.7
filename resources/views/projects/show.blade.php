@extends('layout')

@section('breadcrumb')
    {{ Breadcrumbs::render('show', ['id' => $project->id]) }}
    @endsection

@section('title' , "Detalle {$project->title}")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="h2">Detalle del Proyecto {{ $project->title }}</h1>
        </div>

        <div class="col-md-11" style="height: 20px; border-bottom: groove; margin-left: 20px; margin-bottom: 50px"></div>

        <div class="col-md-12">
            <div class="content">
                <h4>{{ $project->description }}</h4>
            </div>


            <p style="background-color: gray; height: 1px; width: 90%; margin-top: 50%"></p>
            <table class="tab-contenttable table-bordered">
                <tr>
                    <th>
                        <a class="btn btn-dark" href="/projects/{{ $project->id }}/edit" style="border-radius: 1px">Edit</a>
                    </th>
                    <th>
                        <a class="btn btn-dark" href="{{ route('projects.index') }}">Volver</a>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    @endsection