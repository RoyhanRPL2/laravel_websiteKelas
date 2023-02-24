@extends('dashboard.layouts.main')
@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role alert>
            {{ session('success') }}
        </div>
    @endif
    <h1>Welcome</h1>
@endsection
