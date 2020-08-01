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
                <h1>Edit a song from the time machine!</h1>
                <form action="/admin/2014_2015/edit" method="POST">
                @csrf
                <input type="hidden" name="songid" id="songid" value="{{ $songs2014->_id }}">
                    <div class="form-group">
                        <label for="song_title">Song title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $songs2014->title }}">
                    </div>
                    <div class="form-group">
                    <label for ="artist"> Artists </label>
                    <textarea class= "form-control" name="artist" id="artist" cols="30" rows="3" value="{{ $songs2014->artist }}"></textarea>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="top genre">Top genre</label>
                        <input type="text" class="form-control" id="top genre" name="top genre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="year">Year</label>
                        <select type="text" class="form-control" id="year" name="year" value="{{ $songs2014->year}}">
                            <option value ="0">Select the year...</option>
                            <option value ="2014">2014</option>
                            <option value ="2015">2015</option>
                        </select>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>     
@endsection
