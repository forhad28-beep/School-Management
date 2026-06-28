@extends('layouts.app')

@section('content')

    <a href="{{ route('sections.create') }}" class="btn btn-primary mb-3">

        Add Section

    </a>

    <table class="table table-bordered">

        <tr>

            <th>ID</th>

            <th>Class</th>

            <th>Section</th>

        </tr>

        @foreach($sections as $section)

            <tr>

                <td>{{ $section->id }}</td>

                <td>{{ $section->classRoom->name }}</td>

                <td>{{ $section->name }}</td>

            </tr>

        @endforeach

    </table>

@endsection