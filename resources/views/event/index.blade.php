@extends('layouts.app')

@section('name', 'Event')

@section('date')
    <div>
        @yield('subtitle')
        @if(isset($user))
            <?php
                $events = $user->events()->get();
            ?>
        @endif
        @if($events)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Date Start</th>
                    <th scope="col">Date End</th>
                    <th scope="col">User</th>
                    <th scope="col">Event</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    @include('event.partial.raw', ['event' => $event])
                @endforeach
                </tbody>
            </table>
            @if(isset($user))
                <a class="btn btn-primary btn-lg btn-block" href = {{route('user.insert.event', ['id' => $user->id])}}>Insert</a>
            @else
                <a class="btn btn-primary btn-lg btn-block" href = {{route('event.insert')}}>Insert</a>
            @endif
        @else

            No events
        @endif
    </div>
@endsection
