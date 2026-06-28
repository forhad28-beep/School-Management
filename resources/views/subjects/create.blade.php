@extends('layouts.app')

@section('content')

    <h2>Add Subject</h2>

    <form action="{{ route('subjects.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Class</label>

            <select class="form-select" name="class_room_id">

                @foreach($classes as $class)

                    <option value="{{ $class->id }}">
                        {{ $class->name }}
                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Subject Name</label>

            <input type="text" name="name" class="form-control">

        </div>

        <div class="mb-3">

            <label>Subject Code</label>

            <input type="text" name="code" class="form-control">

        </div>

        <div class="mb-3">

            <label>Full Mark</label>

            <input type="number" name="full_mark" value="100" class="form-control">

        </div>

        <button class="btn btn-primary">

            Save Subject

        </button>

    </form>

@endsection