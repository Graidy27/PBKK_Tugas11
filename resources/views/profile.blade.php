@extends('layouts.main')

@section('container')

<h1 class="mt-4">My profile</h1>

<div class="mt-4">
  <h5>Nama : {{ auth()->user()->name }}</h5>
  <h5>Username : {{ auth()->user()->username }}</h5>
  <h5>Email : {{ auth()->user()->email }}</h5>
</div>

    
@endsection