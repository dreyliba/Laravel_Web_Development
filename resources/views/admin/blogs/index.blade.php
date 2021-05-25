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
                        <tr>
                            <td>Hello</td>
                            <td>Hello</td>
                            <td>Hello</td>
                            <td>
                                <div class="btn btn-success btn-sm px-3">Edit</div>
                                <div class="btn btn-danger btn-sm">Delete</div>
                            </td>
                        </tr>
                        {{-- @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                <td>{!! $blog->title !!}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach --}}
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