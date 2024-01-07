@extends('layouts.app')

@section('name', 'Event')

@section('date')
    <div>
        {{$event->title}}
        {{$event->notes}}
        {{$event->dt_start}}
        {{$event->dt_end}}
    </div>
@endsection
