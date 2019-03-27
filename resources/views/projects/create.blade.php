@extends('layout')

@section('content')
    <div class="container">
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="mb-0">Create Project</h5>
        </div>
        <div class="card-body bg-light">
          <form method="POST" action="/projects">
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title"/>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button class="btn btn-falcon-default" type="submit">Create project</button>
          </form>
        </div>
      </div>
    </div>
@endsection