@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <div class="card mb-5 shadow">
            <div class="card-header">
                Blogs
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="10%">Date</th>
                        <th scope="col">Title</th>
                        <th scope="col" width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                <td>{!! $blog->title !!}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>Edit
                                    </a>
                                    <a href="{{ route('blogs.destroy', $blog->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('blogs.create') }}" class="btn btn-success btn-sm">
                    New Blog
                </a>
            </div>
        </div>
    </div>
    
@endsection