@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>2016 - 2017 songs</h1>
                <div class="row">
                    @foreach($songs2016 as $s2016)
                  <div class="card col-md-3">
                         
                             <div class="card-body">
                            <h5 class="card-title">{{ $s2016->title }}</h5>
                            <p class="card-text">{{ $s2016->artist }}</p>
                            <a href="/2016_2017/{{ $s2016->_id }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                         <div class="btn-group mx-auto" role="group" aria-label="First group">
                            @php
                                 $cpage = request('pg') == 0 ? 1 : request('pg');
                            @endphp
                            <a href="/2016_2017?pg= {{$cpage - 1}}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : ' ' }}">&lt</a>

                           @for ($i = 1; $i <= ceil($songsFOURcount/12); $i++)
                           <a href="/2016_2017?pg={{$i}}"  class="btn btn-secondary {{( $cpage == $i ? 'disabled' : ' ') }} ">{{ $i }}</a>
                           @endfor
                           <a href="/2016_2017?pg= {{$cpage + 1}}" class="btn btn-secondary {{ $cpage == ceil($songsFOURcount/12) ? 'disabled' : ' ' }}">&gt</a>
                         </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection