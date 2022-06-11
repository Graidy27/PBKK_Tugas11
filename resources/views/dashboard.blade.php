@extends('layouts.main')

@section('container')

<h1>Welcome Back, {{ auth()->user()->name }}</h1>
    
@endsection