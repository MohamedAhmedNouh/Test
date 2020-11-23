@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="submit({{$user}})">
            <label>
                Name:
                <input class="form-control" type="text" value="{{$user->name}}">
            </label>
            <label>
                Email:
                <input type="text" class="form-control"  value="{{$user->email}}">
            </label>
            <label>
                User Name:
                <input type="text" class="form-control"  value="{{$user->username}}">
            </label>
            <label>
                <input type="submit" class="btn btn-primary" value="update">
            </label>
        </form>
    </div>
@endsection
