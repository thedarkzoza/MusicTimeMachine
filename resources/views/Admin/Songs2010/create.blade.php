@extends(' layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add new song to the time machine!</h1>
                <form action="/admin/2010_2011/create" method="POST">
                @csrf
                    
                    <div class="form-group">
                        <label for="song_title">Song title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                    <label for ="artist"> Artists </label>
                    <textarea class= "form-control" name="artist" id="artist" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="top genre">Top genre</label>
                        <input type="text" class="form-control" id="top genre" name="top genre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="year">Year</label>
                        <select type="text" class="form-control" id="year" name="year">
                            <option value ="0">Select the year...</option>
                            <option value ="2010">2010</option>
                            <option value ="2011">2011</option>
                        </select>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>     
@endsection
