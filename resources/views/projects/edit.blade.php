@extends('layout')

@section('content')
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/projects">Projects</a>
          </li>
          <li class="breadcrumb-item">
            <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="mb-0">Edit Project</h5>
        </div>
        <div class="card-body bg-light">
          <form method="POST" action="/projects/{{ $project->id }}">
            {{-- {{ method_field('PATCH') }} --}}
            @method("PATCH")
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" />
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
            </div>
            <button class="btn btn-falcon-default" type="submit">Update project</button>
          </form>
        </div>
      </div>
      <div class="card alert-danger">
        <div class="card-body d-flex justify-content-between align-items-center">
          <h5 class="mb-0 text-danger font-weight-bold">Danger Zone</h5>
          <form method="POST" action="/projects/{{ $project->id }}">
            {{-- {{ method_field('DELETE') }} --}}
            @method('DELETE')
            {{-- {{ csrf_field() }} --}}
            @csrf
            <button class="btn btn-falcon-danger" type="submit">Delete project</button>
          </form>
        </div>
      </div>
    </div>
@endsection