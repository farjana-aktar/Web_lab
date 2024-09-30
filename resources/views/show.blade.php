@extends('layout')

@section('page-content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>Employee Details</h2>
            <p>Details of the selected employee from the Employee Management System</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$employee->name}}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{$employee->id}}</li>
                <li class="list-group-item"><strong>Job Title:</strong> {{$employee->job_title}}</li>
                <li class="list-group-item"><strong>Joining Date:</strong> {{$employee->joining_date}}</li>
                <li class="list-group-item"><strong>Salary:</strong> {{$employee->salary}}</li>
                <li class="list-group-item"><strong>Email:</strong> {{$employee->email}}</li>
                <li class="list-group-item"><strong>Phone Number:</strong> {{$employee->mobile_no}}</li>
                <li class="list-group-item"><strong>Address:</strong> {{$employee->address}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to Employee List</a>
        </div>
    </div>
</div>

@endsection
