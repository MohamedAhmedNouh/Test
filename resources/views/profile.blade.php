@extends('layouts.master')

@section('title','Employees Index')

@section('content')
    <div class="container">
        <h1>Name: {{ $user->name ?? 'Not found' }}</h1>
        <ul>
            <li>Email: {{$user->email}}</li>
            <li>Username: {{$user->username}}</li>
            <li>Date Added: {{$user->created_at}}</li>
            <li><a href="./update/{{$user->id}}">Update</a></li>
        </ul>
    </div>
@endsection
