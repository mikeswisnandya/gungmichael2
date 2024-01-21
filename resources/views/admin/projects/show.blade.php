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
                        <li class="breadcrumb-item active">Preview</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <h1>{{ $projects->title }}</h1>
        <p>{{ $projects->description }}</p>
        <p>{{ $projects->category_id }}</p>
        <img src="{{ asset('storage/' . $projects->image_path) }}" alt="{{ $projects->title }}">
    </div>
@endsection
