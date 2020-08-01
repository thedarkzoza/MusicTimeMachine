@extends('layouts.app')
@section('title')
<title>Songs 2012 - 2013</title>
@endsection
@section('content')
<p></p>
    <div class="container">

    @if (session('mssg') !== null)
    <div class="alert alert-{{session('alerttype')}} alert-dismissible fade show" role="alert">
                {{ session('mssg') }}
                    <strong> </strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
    @endif

        <div class="row">
             <div class="col-md-12">
                <h1>Songs 2012 - 2013</h1>
                <a class="text-right" href="/admin/2012_2013/create">Add new song</a>
            </div>
        </div class = "col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Top Genre</th>
                    <th scope="col">Year</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
            @foreach($songs2012 as $s2012)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $s2012["title"] }}</td>
                        <td>{{ $s2012["artist"] }}</td>
                        <td>{{ $s2012["top genre"] }}</td>
                        <td>{{ $s2012["year"] }}</td>
                        <td>
                            <a href="/admin/2012_2013/{{$s2012['_id'] }}">Details</a> |
                            <a href="/admin/2012_2013/edit/{{ $s2012->_id }}">Edit</a> |
                            <a href="/admin/2012_2013/delete/{{ $s2012->_id }}">Delete</a> 
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection