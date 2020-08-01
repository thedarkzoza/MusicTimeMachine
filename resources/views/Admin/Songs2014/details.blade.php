@extends('layouts.app')

@section('content')
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
                <h1>Song details</h1>               
                  <div class="card">
                  <input type="hidden" name="songid" id="songid">
                    <div class="card-body">
                      <h5 class="card-title">{{ $songs2014->title }}</h5>
                      <p class="card-text">
                      <b>Artist:</b>   {{ $songs2014->artist }}
                      <br>
                      <b>Genre:</b>   {{ $songs2014["top genre"] }}
                      <br>
                      <b>Year:</b>    {{ $songs2014->year }}
                       </p>
                      <a href="/admin/2014_2015/edit/{{ $songs2014->_id }}" class="btn btn-primary">Edit</a>
                      <a href="/admin/2014_2015/delete/{{ $songs2014->_id }}" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
