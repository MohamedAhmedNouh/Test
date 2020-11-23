@extends('layouts.master')
@section('title','Employees Index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Welcome {{ $employee->firstname }} {{ $employee->lastname }}</h1>
            <ul class="p-3">
                <li style="font-size: larger">Department: {{ $employee->department }}</li>
                <li style="font-size: larger">Phone: {{ $employee->phone }}</li>
            </ul>
        </div>
    </div>
@endsection
