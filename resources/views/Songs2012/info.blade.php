@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{ $songs2012->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $songs2012->artist }}</h6>
                <p class="card-text"> </p>
                <p class="card-text">{{ $songs2012->year }} </p>
            </div>
                <div class="card-footer">
                <p>Rating:  </p> 
                <input type="radio" name="rating" id="rating">
                <input type="radio" name="rating" id="rating">
                <input type="radio" name="rating" id="rating">
                <input type="radio" name="rating" id="rating">
                <input type="radio" name="rating" id="rating">
            </div>
        </div>
        <div class="col-md-12">
        <h1 class="">Add a comment</h1>
            <form action="">
            <input type="hidden" name="songid" id="songid" value="{{ $songs2012->_id }}">
                <div class="form group"> 
                    <label for="userid">User ID</label>
                    <input class="form-control" type="text" name="userid" id="userid">
                </div>
                <div class="form group">
                <label for="comment">Comment</label>
                    <textarea class="form-control" type="comment" name="comment" cols="30" rows="4"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Add comment</button>
            </form>
        </div>
        <div class="col-md-12">
            <h1>User comments</h1>
            <div class="card col-md-12">
                <div class="card-body">
                     <h4 class="card-title">User id</h4>
                     <p class="card-text">Comment</p>
                     <p class="card-text">Date published:</p>
                </div>
        </div>
    </div>
</div>
@endsection