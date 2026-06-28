@extends('layouts.app')

@section('content')

    <h2>Teacher Details</h2>

    @if($teacher->photo)

        <img src="{{ asset('storage/' . $teacher->photo) }}" width="150">

    @endif

    <table class="table table-bordered mt-3">

        <tr>

            <th>Employee ID</th>

            <td>{{ $teacher->employee_id }}</td>

        </tr>

        <tr>

            <th>Name</th>

            <td>{{ $teacher->name }}</td>

        </tr>

        <tr>

            <th>Email</th>

            <td>{{ $teacher->email }}</td>

        </tr>

        <tr>

            <th>Phone</th>

            <td>{{ $teacher->phone }}</td>

        </tr>

        <tr>

            <th>Gender</th>

            <td>{{ $teacher->gender }}</td>

        </tr>

        <tr>

            <th>Joining Date</th>

            <td>{{ $teacher->joining_date }}</td>

        </tr>

        <tr>

            <th>Address</th>

            <td>{{ $teacher->address }}</td>

        </tr>

    </table>

@endsection