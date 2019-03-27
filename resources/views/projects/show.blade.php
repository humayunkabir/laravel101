@extends('layout')

@section('content')
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/projects">Projects</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
      </ol>
    </nav>
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">{{ $project->title }}</h5>
        <div class="d-flex align-itmes-center">
          <form method="POST" action="/projects/{{ $project->id }}">
            {{-- {{ method_field('DELETE') }} --}}
            @method("DELETE")
            {{-- {{ csrf_field() }} --}}
            @csrf
            <button class="btn btn-falcon-danger btn-sm" type="submit">Delete</button>
          </form>
          <a class="btn btn-falcon-default btn-sm ml-2" href="/projects/{{ $project->id }}/edit">Edit</a>
        </div>
      </div>
      <div class="card-body bg-light">
        <p class="mb-0">{{ $project->description }}</p>
      </div>
    </div>
  </div>
@endsection