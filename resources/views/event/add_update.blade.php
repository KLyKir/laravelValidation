@extends('layouts.app')

@section('name', 'User')

@section('date')

    <form method = "POST" @if(isset($event)) @if(isset($user)) action = "{{route('user.update.event')}}" @else action = "{{route('event.update')}}" @endif @else @if(isset($user)) action = "{{route('user.insert.event', ['id' => $user->id])}}" @else action = "{{route('event.insert')}}" @endif @endif>
        @csrf
        @if(isset($user))
            <input type = "number" value = "{{$user->id}}" name = "userID" hidden>
        @endif
        @if(isset($event))
            <input type = "number" value = "{{$event->id}}" name = "id" hidden>
        @endif
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name = "title" placeholder="Enter title" @if(isset($event)) value = "{{$event->title}}" @endif>
            @error('title')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <input type="text" class="form-control" id="notes" name = "notes" placeholder="Enter notes" @if(isset($event)) value = "{{$event->notes}}" @endif>
            @error('notes')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="dt_start">Date Start</label>
            <input type="date" class="form-control" id="dt_start" name = "dt_start" placeholder="Enter date start" @if(isset($event)) value = "{{$event->dt_start}}" @endif>
            @error('dt_start')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <label for="dt_end">Date End</label>
            <input type="date" class="form-control" id="dt_end" name = "dt_end" placeholder="Enter date end" @if(isset($event)) value = "{{$event->dt_end}}" @endif>
            @error('dt_end')
            {{$message}}
            @enderror
        </div>
        @if(!isset($user))
            <label for ="user">User</label>
            <?php
                $users = \App\Models\User::get();
                ?>
            <select class = "form-control" id = "user" name = "user">
            <?php
                if(isset($event)){
                    $userSelected = $event->user->id;
                }
                else{
                    $userSelected = 1;
                }
                ?>
            @foreach($users as $user)
                    @if($userSelected == $user->id)
                        <option value = "{{$user->id}}" selected>{{$user->name}}</option>
                    @else
                        <option value = "{{$user->id}}">{{$user->name}}</option>
                    @endif

            @endforeach
            </select>
        @endif
        @if(isset($event))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Add event</button>
        @endif
    </form>
@endsection
