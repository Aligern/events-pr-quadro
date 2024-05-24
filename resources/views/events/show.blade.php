@extends('layouts.app')

@section('title', $event->name)

@section('content')
<main class="container">
    <h1 class="text-center">{{ $event->name }}</h1>
    <div class="d-flex justify-content-center mb-3">
        <img src="{{$event->location_url}}" alt="{{ $event->name }}" >
    </div>
    <div class="text-center">
        <h3>Ci vediamo il:</h3>
        <p>{{$event->date_start_event}}</p>
        <br>
        <p> {{$event->overview}}</p>
    </div>

</main>

@endsection