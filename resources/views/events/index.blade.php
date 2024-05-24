@extends('layouts.app')

@section('title', 'Events')

<h1>Events</h1>

@section('content')
    <ul>
        @foreach ($events as $item)
            <li>
                {{$item->name}} : {{$item->city}} : {{$item->address}} : {{$item->ticket_price}} : {{$item->date_start_item}}

            </li>        
            <img src="{{$item->location_url}}" alt="{{$item->name}}">
        @endforeach
    </ul>
@endsection
