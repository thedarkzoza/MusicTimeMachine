@extends(' layouts.app')

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
                <h1>Delete a song from the time machine!😔👌</h1>
                
                <form action="/admin/2016_2017/delete" method="POST">
                @csrf
                @method("DELETE")
                <input type="hidden" name="songid" id="songid" value="{{ $songs2016->_id }}">
                    <div class="form-group">
                        <label for="song_title">Song title</label>
                        <input type="text" class="form-control" id="song_title" name="song_title" value="{{ $songs2016->title}}" disabled>
                    </div>
                    <div class="form-group">
                    <label for ="artist"> Artists </label>
                    <textarea class= "form-control" name="artist" id="artist" cols="30" rows="3" value="{{ $songs2016->artist}}" disabled></textarea>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="top genre">Top Genre</label>
                        <input type="text" class="form-control" id="top genre" name="top genre" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="year">Year</label>
                        <select type="text" class="form-control" id="year" name="year" value="{{ $songs2016->year}} disabled">
                            <option value ="0">Select the year...</option>
                            <option value ="2016">2016</option>
                            <option value ="2017">2017</option>
                        </select>
                        </div>
                    </div>
                    <button class="btn btn-default" type="submit">Cancel</button>
                    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->

                    <!-- Button trigger modal -->
                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                           Delete
                         </button>

                     <!-- Modal -->
                     <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                       <div class="modal-dialog">
                         <div class="modal-content">
                           <div class="modal-header bg-danger dark">
                             <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete product</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             Are you sure that you want to delete this? This action can be undone.
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                             <button type="submit" class="btn btn-danger">Confirm</button>
                           </div>
                         </div>
                       </div>
                     </div>
                </form>
            </div>
        </div>
    </div>     
@endsection
