@extends('layouts.app')

@section('content')

    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">

        Add Teacher

    </a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>
                <th>Photo</th>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($teachers as $teacher)

                <tr>

                    <td>{{ $teacher->id }}</td>

                    <td>

                        @if($teacher->photo)

                            <img src="{{ asset('storage/' . $teacher->photo) }}" width="60">

                        @endif

                    </td>

                    <td>{{ $teacher->employee_id }}</td>

                    <td>{{ $teacher->name }}</td>

                    <td>{{ $teacher->email }}</td>

                    <td>{{ $teacher->phone }}</td>

                    <td>

                        <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-info btn-sm">

                            View

                        </a>

                        <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Delete Teacher?')" class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

@endsection