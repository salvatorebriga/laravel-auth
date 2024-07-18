{{-- resources/admin/projects/index.blade.php --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="py-4">Projects</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <th scope="row" class="col">{{ $project->id }}</th>
            <td class="col-2">{{ $project->name }}</td>
            <td class="col-8">{{ $project->description }}</td>
            <td class="col">
              <div class="btn-group" role="group" aria-label="Project Actions">
                <button class="btn btn-primary"><i class="fas fa-pencil"></i></button>
                <button class="btn btn-warning"><i class="fas fa-search"></i></button>
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
