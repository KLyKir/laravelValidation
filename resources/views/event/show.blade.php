@extends('layouts.app')

@section('name', 'Event')

@section('date')
    <div>
        {{$event->name}}
        {{$event->date}}
        {{$event->time}}
    </div>
@endsection
