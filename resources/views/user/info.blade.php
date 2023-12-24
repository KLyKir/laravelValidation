@extends('layouts.app')

@section('name', 'User')

@section('date')
    <div>
        {{$user->name}}
        {{$user->email}}
        {{$user->password}}
    </div>
@endsection
