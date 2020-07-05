@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="font-weight-bold text-danger">Section 1:</h2>
                        <div class="row">
                            <div class="col-md-6">
                                  @foreach($contents as $con)
                                      @if($loop->first)
                                            <div class="card" style="width: 22rem;">
                                                <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $con->title }}</h5>
                                                    <a href="{{ route('content.details', $con->id) }}" class="btn btn-primary">See Details</a>
                                                </div>
                                            </div>
                                       @endif
                                    @endforeach
                            </div>
                            <div class="col-md-3">
                                @foreach($contents as $con)
                                    @if($loop->iteration == 2)
                                        <div class="card" style="width: 12rem;">
                                            <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $con->title }}</h5>
                                                <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                @foreach($contents as $con)
                                        @if($loop->iteration == 3)
                                            <div class="card mt-2" style="width: 12rem;">
                                                <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $con->title }}</h5>
                                                    <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                                </div>
                                            </div>
                                        @endif
                                 @endforeach
                            </div>
                            <div class="col-md-3">
                                @foreach($contents as $con)
                                    @if($loop->iteration == 4)
                                        <div class="card" style="width: 12rem;">
                                            <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $con->title }}</h5>
                                                <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                @foreach($contents as $con)
                                        @if($loop->last)
                                            <div class="card mt-2" style="width: 12rem;">
                                                <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $con->title }}</h5>
                                                    <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                                </div>
                                            </div>
                                        @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <hr style="width: 3px; height: 100%; background: green; border: none;">
                    </div>
                    <div class="col-md-4">
                        <h2 class="font-weight-bold text-danger">Section 2:</h2>
                        <div class="row">
                            <div class="col-md-12">
                                @foreach($content as $con)
                                    @if($loop->first)
                                        <div class="card mb-2" style="width: 26rem;">
                                            <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $con->title }}</h5>
                                                <a href="{{ route('content.details', $con->id) }}" class="btn btn-primary">See Details</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="row">
                                    <div class="col-md-6">
                                        @foreach($content as $con)
                                            @if($loop->iteration == 2)
                                                <div class="card mt-2" style="width: 12rem;">
                                                    <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $con->title }}</h5>
                                                        <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        @foreach($content as $con)
                                            @if($loop->iteration == 3)
                                                    <div class="card mt-2" style="width: 12rem;">
                                                        <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $con->title }}</h5>
                                                            <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                                        </div>
                                                    </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($content as $con)
                                            @if($loop->iteration == 4)
                                                <div class="card mt-2" style="width: 12rem;">
                                                    <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $con->title }}</h5>
                                                        <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        @foreach($content as $con)
                                            @if($loop->last)
                                                    <div class="card mt-2" style="width: 12rem;">
                                                        <img src="{{ asset('uploads/'.$con->image) }}" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $con->title }}</h5>
                                                            <a href="{{ route('content.details', $con->id) }}" class="btn btn-sm btn-primary">See Details</a>
                                                        </div>
                                                    </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
