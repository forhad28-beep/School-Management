@extends('layouts.app')

@section('content')

    <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">

        Add Class

    </a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Code</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($classes as $class)

                <tr>

                    <td>{{ $class->id }}</td>

                    <td>{{ $class->name }}</td>

                    <td>{{ $class->code }}</td>

                    <td>

                        <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Delete this class?')" class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

@endsection