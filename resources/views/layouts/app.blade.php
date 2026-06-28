<!DOCTYPE html>
<html>

<head>

    <title>School Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    @include('layouts.navbar')

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2 bg-light vh-100 p-3">

                @include('layouts.sidebar')

            </div>

            <div class="col-md-10 p-4">

                @if(session('success'))

                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>

                @endif

                @yield('content')

            </div>

        </div>

    </div>

</body>

</html>