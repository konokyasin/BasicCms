@extends('layouts.app')
@section('content')
    <div class="container">
        @include('others.message')
    </div>
    <h1 class="text-center my-5 text-primary">Create Content</h1>
    <div class="container">
        <a  href="{{ route('home') }}" class="btn btn-primary text-white mb-3">View Contents</a>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">New Content</div>
                    <div class="card-body">
                        <form action="{{ route('store.cms') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="EX: title">
                            </div>

                            <div class="form-group">
                                <label for="content_type">Type of Content</label>
                                <input type="text" class="form-control" name="content_type" id="content_type" value="Post" readonly>
                            </div>

                            <div class="form-group">
                                <label for="publish_section">Publish Section</label>
                                <select name="publish_section" class="form-control">
                                    <option value="Section 1">Section 1</option>
                                    <option value="Section 2">Section 2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5" cols="5" placeholder="EX: Content Description" ></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
