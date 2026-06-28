@extends('layouts.app')

@section('content')

    <a href="{{ route('subjects.create') }}" class="btn btn-primary mb-3">

        Add Subject

    </a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>
                <th>Class</th>
                <th>Subject</th>
                <th>Code</th>
                <th>Full Mark</th>

            </tr>

        </thead>

        <tbody>

            @foreach($subjects as $subject)

                <tr>

                    <td>{{ $subject->id }}</td>

                    <td>{{ $subject->classRoom->name }}</td>

                    <td>{{ $subject->name }}</td>

                    <td>{{ $subject->code }}</td>

                    <td>{{ $subject->full_mark }}</td>

                </tr>

            @endforeach

        </tbody>

    </table>

@endsection