@extends('layouts.app')

@section('page-title', 'Single Project')


@section('main-content')
<div class="row">
    <div class="col d-flex justify-content-center">
        <div class="card w-50 text center">
            <div>
                <span class="h3 fs-1">
                    Title:
                </span>
                <span class="fs-2">
                    {{ $project->title }}
                </span>
            </div>
            <div>
                <span class="h3 fs-1">
                    Description:
                </span>
                <span class="fs-2">
                    {{ $project->description }}
                </span>
            </div>
            <div>
                <span class="h3 fs-1">
                    Start Date:
                </span>
                <span class="fs-2">
                    {{ $project->start_date }}
                </span>
            </div>
            <div>
                <span class="h3 fs-1">
                    End Date:
                </span>
                <span class="fs-2">
                    {{ $project->end_date }}
                </span>
            </div>
            <div>
                <span class="h3 fs-1">
                    Category:
                </span>
                <span class="fs-2">
                    {{ $project->category }}
                </span>
            </div>
            <div>
                <span class="h3 fs-1">
                    Languages:
                </span>
                <span class="fs-2">
                    {{ $project->languages }}
                </span>
            </div>
            <div>
                <span class="h3 fs-1">
                    Project Status:
                </span>
                <span class="fs-2">
                    {{ $project->project_status }}
                </span>
            </div>
        </div>
    </div>
@endsection
