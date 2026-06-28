@extends('layouts.app')

@section('content')

<h2>Add Section</h2>

<form action="{{ route('sections.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Class</label>

        <select name="class_room_id" class="form-select">

            @foreach($classes as $class)

                <option value="{{ $class->id }}">
                    {{ $class->name }}
                </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">

        <label>Section Name</label>

        <input
            type="text"
            name="name"
            class="form-control">

    </div>

    <button class="btn btn-primary">

        Save

    </button>

</form>

@endsection