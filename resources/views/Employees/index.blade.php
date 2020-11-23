@extends('layouts.master')
@section('title','Employees Index')
@section('content')
    <div class="row">
        <a href="{{route('Employees.create')}}" class = "btn btn-link">Add new Employee</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table" style="border: #1a202c solid">
                <tr class = "text-center" style="border: #1a202c dashed">
                    <th >ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Phone No.</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Profile</th>
                </tr>
                @foreach($employees as $employee)
                    <tr class = "text-center" style="border: #1a202c dashed">
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->firstname }}</td>
                        <td>{{ $employee->lastname }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td><a href="{{route('Employees.edit',['id'=>$employee->id])}}" class = "btn btn-info">Edit</a></td>
                        <td><a href="{{route('Employees.destroy',['id'=>$employee->id])}}" class = "btn btn-danger">Delete</a></td>
                        <td><a href="{{route('Employees.show',['id'=>$employee->id])}}" class = "btn btn-outline-info">Profile</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
