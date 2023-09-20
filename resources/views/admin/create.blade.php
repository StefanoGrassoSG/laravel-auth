@extends('layouts.app')

@section('page-title', 'Create new project')


@section('main-content')
    <div class="row d-flex align-items-center justify-content-center mt-5">
        <div class="col text-center">
            <h1>
                Add New Project
            </h1>
        </div>    
    </div>

   {{--@if ($errors->any()) 
        <div class="alert alert-danger mb-4"> 
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif--}}

    <form action="{{ route('admin.projects.store') }}" method="POST" class="p-5 d-flex justify-content-center">
        @csrf

        <div class="right w-50 p-5">
            <div class="mb-3">
                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="descr" class="form-label">Description<span class="text-danger">*</span></label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="descr" aria-describedby="emailHelp" value="{{ old('description') }}">
                @error('description')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date<span class="text-danger">*</span></label>
                <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" aria-describedby="emailHelp" value="{{ old('start_date') }}">
                @error('start_date')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" step="any" class="form-control @error('end_date') is-invalid @enderror" id="end_date" aria-describedby="emailHelp" value="{{ old('end_date') }}">
                @error('end_date')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </div>

        <div class="left w-50 p-5">
            <div class="mb-3">
                <label for="category" class="form-label">Category<span class="text-danger">*</span></label>
                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" aria-describedby="emailHelp" value="{{ old('category') }}">
                @error('category')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="languages" class="form-label">Languages<span class="text-danger">*</span></label>
                <input type="text" name="languages" class="form-control @error('languages') is-invalid @enderror" id="languages" aria-describedby="emailHelp" value="{{ old('languages') }}">
                @error('languages')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="project_status" class="form-label">Project Status<span class="text-danger">*</span></label>
                <input type="project_status" name="project_status" class="form-control @error('project_status') is-invalid @enderror" id="project_status" aria-describedby="emailHelp" value="{{ old('project_status') }}">
                @error('project_status')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div> 
                @enderror
            </div>
        </div>
       
        
    </form>
@endsection