@extends('layouts.app')

@section('name', 'Event')

@section('date')
    <div>
        @yield('subtitle')
        @if($events)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Event</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    @include('event.partial.raw', ['event' => $event])
                @endforeach
                </tbody>
            </table>
        @else
            No events
        @endif
    </div>
@endsection
