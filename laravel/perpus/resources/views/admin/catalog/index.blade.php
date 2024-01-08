@extends('layouts.admin')

@section('header', 'Catalog')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('catalogs/create') }}" class="btn btn-sm btn-primary pull-right">Create New Catalog</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Total Books</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($catalogs as $key => $catalog)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td>{{ $catalog->name }}</td>
                        <td class="text-center">{{ count($catalog->books) }}</td>
                        <td class="text-center">{{ date('H:i:s - d/M/Y', strtotime($catalog->created_at)) }}</td>
                        <td>
                            <a href="{{ url('catalogs/'.$catalog->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are You Sure ??')">
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
