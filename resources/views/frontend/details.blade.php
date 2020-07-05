@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-danger text-center font-weight-bold mb-2">Content Details</h1>
        <a href="{{ url('/') }}" class="btn btn-info text-white mb-2"><i class="fa fa-long-arrow-left"></i> Back</a>
        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('uploads/'.$details->image) }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-success">Title: {{ $details->title }}</h5>
                        <p class="card-text">Publish Section: {{ $details->publish_section }}</p>
                        <p class="card-text">Content Type: {{ $details->content_type }}</p>
                        <p class="card-text">Description: {{ $details->description }}</p>
                        <p class="card-text"><small class="text-muted">Content Status: This content is active.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    add sharing option--}}
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f0205e9489d088c"></script>
@endsection
