@extends('layout')

@section('page-content')

<form action="{{ route('employee.search') }}" method="GET" class="form-inline mb-3">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search employees" aria-label="Search" value="{{ request()->input('search') }}">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Author_name</th>
            <th scope="col">JobTitle</th>
            <th scope="col">Joining Date</th>
            <th scope="col">Salary</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>

        @foreach ($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->job_title}}</td>
                <td>{{$employee->salary}}</td>
                <td>{{$employee->joining_date}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->mobile_no}}</td>
                <td>{{$employee->address}}</td>

                <td>

                    <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-info mb-2">Show Details</a>

                    <form action="{{route('employee.destroy', $employee->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure ?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

<a href="{{ route('employee.create') }}" class="btn btn-primary mb-3">Add Employee</a>


{{$employees->links()}};

@endsection
