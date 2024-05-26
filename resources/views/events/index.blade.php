@extends('layouts.app')

@section('title', 'Events')

<h1>Events</h1>

@section('content')
<div class="container">
@foreach ($events as $event)
<div class="row d-flex justify-content-center m-auto">
            <div class="ls-card text-center col-12 col-md-4 col-lg-3">
                <h4 class="card-title pb-4">
                    <a class="card-link" href="{{ route('events.show', $event->id) }}">
                        {{ $event->name }}
                    </a>
                </h4>
                <img id="image" src="{{ $event->location_url }}" alt="">
                <div id="overview" >
                </div>
                <div class="ls-card-body" >
                    <ul>
                        <li>
                            {{ $event->city }} - {{ $event->address }} - {{ $event->date_start_event }}
                        </li>
                    </ul>
                    <span>
                        {{ $event->ticket_price }} €
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
