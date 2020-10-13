<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card col-12 md-mx-2 justify-content-center text-center mb-2">
                <h2>Most common word</h2>
                <p class="lead">
                    Register/login to upload a .txt file and replace the most common word with foo *most common word* bar.
                </p>
            </div>
            <div class="card">

            </div>
            <div class="card">
                <div class="row justify-content-center">
                    <div class="col-11 col-md-3 md-mx-2">
                        <a href='{{ route('register') }}'><button type="button" class="btn btn-primary btn-lg col-12">Register </button></a>
                    </div>
                    <div class="col-11 col-md-3 md-mx-2">
                        <a href='{{ route('login') }}'><button type="button" class="btn btn-primary btn-lg col-12">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    </body>
</html>
