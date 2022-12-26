@extends('layouts.main')

@section('content')

{{-- @dump($comics) --}}

    <main class="container">
        <div class="container d-flex ">



                <div class="card details">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h4>{{$comic['title']}}</h4>
                    <p>{!! $comic['description'] !!}</p>
                </div>



        </div>
    </main>

@endsection

@section('title')
    Comic dettaglio
@endsection
