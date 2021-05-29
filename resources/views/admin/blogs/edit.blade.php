@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header font-weight-bold text-uppercase">Edit Blog</div>
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter your blog title" value="{{ $blog->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Blog Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" placeholder="Enter text here" class="form-control">{{ $blog->body }}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadImage" aria-describedby="uploadImage">
                            <label class="custom-file-label" for="uploadImage">Choose file</label>
                        </div>
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <input type="submit" value="Update" class="btn btn-success btn-sm px-5">
                </div>
                @method('PUT')
            </form>
        </div>
    </div>
@endsection