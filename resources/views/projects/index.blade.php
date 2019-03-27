@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
        @foreach ($projects as $project)
          <div class="co-md-6 col-lg-4 col-xxl-3">
            <div class="card mb-4">
              <div class="card-header">
              <a href="/projects/{{ $project->id }}" class="text-dark">
                <h5 class="mb-0">{{ $project->title }}</h5>
              </a>
              </div>
              <div class="card-body bg-light">
                <p class="mb-0">{{ $project->description }}</p>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection