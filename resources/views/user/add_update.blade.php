@extends('layouts.app')

@section('name', 'User')

@section('date')
    <form method = "POST" @if(isset($user)) action = "{{route('user.update.info')}}" @else action = "{{route('user.add')}}" @endif>
        @csrf
        @if(isset($user))
            <input type = "number" value = "{{$user->id}}" name = "id" hidden>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name = "name" placeholder="Enter name" @if(isset($user)) value = "{{$user->name}}" @endif>
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name = "email" placeholder="Enter email" @if(isset($user)) value = "{{$user->email}}" @endif>
            @error('email')
                {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name = "password" placeholder="Password" @if(isset($user)) value = "{{$user->password}}" @endif>
            @error('password')
                {{$message}}
            @enderror
        </div>
        @if(isset($user))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Add user</button>
        @endif
    </form>
@endsection
