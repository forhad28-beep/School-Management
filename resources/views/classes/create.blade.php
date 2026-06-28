@extends('layouts.app')

@section('content')

    <h2>Add Class</h2>

    @if($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('classes.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Name</label>

            <input class="form-control" type="text" name="name" value="{{ old('name') }}">

        </div>

        <div class="mb-3">

            <label>Code</label>

            <input class="form-control" type="text" name="code" value="{{ old('code') }}">

        </div>

        <div class="mb-3">

            <label>Description</label>

            <textarea class="form-control" name="description">{{ old('description') }}</textarea>

        </div>

        <button class="btn btn-primary">

            Save

        </button>

    </form>

@endsection