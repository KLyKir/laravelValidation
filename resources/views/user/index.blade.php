@extends('layouts.app')

@section('name', 'User')

@section('date')
    <div>
        @yield('subtitle')
        @if($users)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @include('user.partial.raw', ['user' => $user])
                @endforeach
                </tbody>
            </table>
        @else
            No users
        @endif
    </div>
@endsection
