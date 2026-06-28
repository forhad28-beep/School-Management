@extends('layouts.app')

@section('content')

    <h2>Dashboard</h2>

    <div class="row">

        <div class="col-md-4">

            <div class="card">

                <div class="card-body">

                    <h4>Total Classes</h4>

                    <p>{{ \App\Models\ClassRoom::count() }}</p>

                </div>

            </div>

        </div>

    </div>

@endsection