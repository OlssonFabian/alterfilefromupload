@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body" id="file-app">
                <file-alter-app :user="{{ auth()->user()}}"></file-alter-app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
