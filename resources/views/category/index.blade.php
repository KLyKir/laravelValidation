@extends('layouts.app')

@section('name', 'Category')

@section('date')
    <div>
        @yield('subtitle')
        @if($categories)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    @include('category.partial.raw', ['category' => $category])
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg btn-block" href = {{route('category.insert')}}>Insert</a>
            <a class="btn btn-primary btn-lg btn-block" href = {{route('category.update')}}>Update</a>
            <a class="btn btn-primary btn-lg btn-block" href = {{route('category.delete')}}>Delete</a>
            <a class="btn btn-primary btn-lg btn-block" href = {{route('category.get')}}>Get</a>
        @else
            No category
        @endif
    </div>
@endsection
