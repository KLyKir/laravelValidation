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
                    <th scope="col">Events</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @include('user.partial.raw', ['user' => $user])
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg btn-block" href = {{route('user.insert')}}>Insert</a>
        @else
            No users
        @endif
    </div>
@endsection
