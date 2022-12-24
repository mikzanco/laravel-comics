@extends('layouts.main')

@section('content')

{{-- @dump($comics) --}}

    <main class="container">
        <div class="container cards">

            @foreach ($comics as $comic)

                <a href="{{ route('comic_details')}}" class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h4>{{$comic['title']}}</h4>
                </a>

            @endforeach

        </div>
    </main>

@endsection

@section('title')
    Comics
@endsection
