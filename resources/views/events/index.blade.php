@extends('layouts.app')

@section('title', 'Events')

<h1>Events</h1>

@section('content')
    <ul>
        @foreach ($events as $event)
            <li>
                {{$event->name}} : {{$event->city}} : {{$event->address}} : {{$event->ticket_price}} : {{$event->date_start_event}}

            </li>        
            <img src="{{$event->location_url}}" alt="{{$event->name}}">
        @endforeach
    </ul>
@endsection
