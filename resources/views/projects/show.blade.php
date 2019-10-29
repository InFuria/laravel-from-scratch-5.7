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

        <div class="col-md-11"
             style="height: 20px; border-bottom: groove; margin-left: 20px; margin-bottom: 50px"></div>

        <div class="col-md-12">
            <div class="content">
                <h4>{{ $project->description }}</h4>
            </div>

            @if($project->tasks->count())
                <div class="card card-group" style="margin-top: 25px">
                    @foreach($project->tasks as $task)
                        <div class="card-body">
                            <form method="POST" action="/tasks/{{ $task->id }}">
                                @method('PATCH')
                                @csrf

                                <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                                    <input type="checkbox" name="completed" onChange="this.form.submit()"
                                            {{ $task->completed ? 'checked' : '' }}>
                                    {{ $task->description }}
                                </label>
                            </form>
                        </div>
                    @endforeach
                </div>
            @endif

            <p style="background-color: gray; height: 1px; width: 90%; margin-top: 30%"></p>
            <table class="tab-contenttable table-bordered">
                <tr>
                    <th>
                        <a class="btn btn-dark" href="/projects/{{ $project->id }}/edit"
                           style="border-radius: 1px">Edit</a>
                    </th>
                    <th>
                        <a class="btn btn-dark" href="{{ route('projects.index') }}">Volver</a>
                    </th>
                </tr>
            </table>


            {{-- add a new task form--}}
            <div class="card card-group bg-dark" style="margin-top: 20px">
                <form method="POST" action="/projects/{{ $project->id }}/tasks">
                    @csrf

                    <label class="card-title" for="description" style="color: white;">NEW TASK</label>

                    <div class="card-body">
                        <input type="text" class="input" name="description" placeholder="New Task" required>
                    </div>

                    <button type="submit" class="btn bg-light">Add Task</button>

                </form>
            </div>

        </div>
    </div>
@endsection