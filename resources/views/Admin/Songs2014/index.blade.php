@extends('layouts.app')
@section('title')
<title>Songs 2014 - 2015</title>
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
                <h1>Songs 2014 - 2015</h1>
                <a class="text-right" href="/admin/2014_2015/create">Add new song</a>
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
            @foreach($songs2014 as $s2014)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $s2014["title"] }}</td>
                        <td>{{ $s2014["artist"] }}</td>
                        <td>{{ $s2014["top genre"] }}</td>
                        <td>{{ $s2014["year"] }}</td>
                        <td>
                            <a href="/admin/2014_2015/{{$s2014['_id'] }}">Details</a> |
                            <a href="/admin/2014_2015/edit/{{ $s2014->_id }}">Edit</a> |
                            <a href="/admin/2014_2015/delete/{{ $s2014->_id }}">Delete</a> 
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection