@extends('layout')
{{ Breadcrumbs::render('create') }}

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Create a new Project</h1>

    <form action="{{ route('projects.store') }}" method="post">
        {{ csrf_field() }}

        <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'border-danger' : '' }}"
                   name="title" placeholder="Project title" value="{{ old('title') }}">
        </div>

        <div class="field" style="margin-top: 10px; margin-bottom: 5px">
            <textarea class="textarea {{ $errors->has('title') ? 'border-danger' : '' }}"
                    name="description" placeholder="Project description">{{ old('description') }}</textarea>
        </div>

        <div class="control">
            <button type="submit">Create Project</button>
        </div>

        @if($errors->any())
            <div class="alert bg-danger text-light" style="margin-top: 15px">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection