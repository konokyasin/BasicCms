@extends('layouts.app')
@section('content')

    <div class="container">
        @include('others.message')
    </div>
    <div class="container">
        <a  href="{{ route('create.cms') }}" class="btn btn-primary text-white mb-3">Add Content</a>
        <table id="datatable" class="table table-bordered table-striped table-hover" style="width:100%;">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Publish Section</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contents as $con)
                <tr>
                    <td>{{ $con->id }}</td>
                    <td>{{ $con->title }}</td>
                    <td>{{ $con->publish_section }}</td>
                    <td class="text-center"><img src="{{ asset('uploads/'.$con->image) }}" style="width: 100px;"></td>
                    <td>
                        @if( $con->status == "0" )
                            <a href="{{ route('status.cms', $con->id) }}" class="btn btn-success text-white" onclick="return confirm('Do you want to unpublish the content status?')" title="click to unpublish">Publish</a>
                        @else
                            <a href="{{ route('status.cms', $con->id) }}" class="btn btn-danger text-white" onclick="return confirm('Do you want to publish the content status?')" title="click to publish">Unpublish</a>
                        @endif
                    </td>
                    <td><a href="{{ route('delete.content', $con->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger text-white"><i class="fa fa-trash" title="click to delete"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
