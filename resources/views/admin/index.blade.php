@extends('layouts.app')

@section('page-title', 'All Projects')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-success fs-4">+ ADD</a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Catergory</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Project Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">
                                {{ $project->id }}
                            </th>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                {{ $project->description }}
                            </td>
                            <td>
                                {{ $project->start_date }}
                            </td>
                            <td>
                                {{ $project->end_date }}
                            </td>
                            <td>
                                {{ $project->category }}
                            </td>
                            <td>
                                {{ $project->languages }}
                            </td>
                            <td>
                                {{ $project->project_status }}
                            </td>
                            <td>
                                <a class="btn btn-primary w-100" href="{{ route('admin.projects.show', ['project' => $project]) }}">
                                    View details
                                </a>
                                <a class="btn btn-warning w-100 my-2" href="">
                                    Edit
                                </a>
                                <form
                                    action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                    class="d-inline-block w-100"
                                    method="POST"
                                    onsubmit="return confirm('Sei sicuro di voler cancellare questo elemento?');">
                                    @csrf
                                    @method('DELETE')
                                
                                    <button type="submit" class="btn btn-danger w-100">
                                        Delete
                                    </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection