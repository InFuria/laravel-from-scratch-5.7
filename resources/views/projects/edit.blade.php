@extends('layout')

@section('breadcrumb')
{{ Breadcrumbs::render('edit', ['id' => $project->id]) }}
@endsection

@section('title' , 'Editar proyecto')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="h2">Editar Proyecto {{ $project->title }}</h1>
        </div>

        <div class="col-md-11" style="height: 20px; border-bottom: groove; margin-left: 20px; margin-bottom: 50px"></div>

        <div class="col-md-12">
            {{-- Form to Edit--}}
            <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
                @method('PATCH')
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>

                    <div class="control">
                        <textarea name="description" class="textarea" required>{{ $project->description }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-dark">Actualizar</button>
                    </div>
                </div>
            </form>


            {{-- Form to delete --}}
            <form method="POST" action="/projects/{{ $project->id }}">
                @method('DELETE')
                @csrf

                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-dark">Eliminar</button>
                    </div>
                </div>
            </form>

            <div style="margin-top: 10px">
                <a class="btn btn-dark" href="{{ url()->previous() }}">Volver</a>
            </div>
        </div>
    </div>
@endsection