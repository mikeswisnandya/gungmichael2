<!-- resources/views/projects/edit.blade.php -->

@extends('layouts.app')

@section('page_title', 'Projects')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Projects</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Projects</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Project</h3>
                        <form action="{{ $projects->id ? route('projects.edit', ['project' => $projects->id]) : '#' }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Project Name</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $projects->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Project Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{ $projects->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="video_source">Video Source:</label>
                            <input type="text" name="video_source" id="video_source" class="form-control" value="{{ $projects->video_source }}" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}" {{ $projects->category_id == $categories->id ? 'selected' : '' }}>
                                        {{ $categories->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Project</button>
                    </div>
                </div>
    </form>
                <!-- /.card -->
            </div>
        </div>
    </div>
    </div>
@endsection
