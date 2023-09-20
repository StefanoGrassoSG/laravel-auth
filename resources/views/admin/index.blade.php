@extends('layouts.app')

@section('page-title', 'All Projects')

@section('main-content')
    <div class="row">
        <div class="col">
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
                                <a class="btn btn-primary w-100" href="">
                                    View details
                                </a>
                                <a class="btn btn-warning w-100 my-2" href="">
                                    Edit
                                </a>
                                <a class="btn btn-danger w-100" href="">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection