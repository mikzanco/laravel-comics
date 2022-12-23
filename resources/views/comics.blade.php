@extends('layouts.main')

@section('content')

{{-- @dump($comics) --}}

    <main class="container">
        <div class="container cards">

            @foreach ($comics as $comic)

                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h4>{{$comic['title']}}</h4>
                </div>

            @endforeach

        </div>
    </main>

@endsection

@section('title')
    Comics
@endsection
