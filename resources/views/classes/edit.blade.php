@extends('layouts.app')

@section('content')

<h2>Edit Class</h2>

<form action="{{ route('classes.update',$class->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Name</label>

<input
class="form-control"
type="text"
name="name"
value="{{ $class->name }}">

</div>

<div class="mb-3">

<label>Code</label>

<input
class="form-control"
type="text"
name="code"
value="{{ $class->code }}">

</div>

<div class="mb-3">

<label>Description</label>

<textarea
class="form-control"
name="description">{{ $class->description }}</textarea>

</div>

<button class="btn btn-success">

Update

</button>

</form>

@endsection