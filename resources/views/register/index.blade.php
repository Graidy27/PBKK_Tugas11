@extends('layouts.main2')

@section('landing')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-5 fw-normal text-center">Create an Account</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="username" class="form-control rounded @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Full Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control rounded @error('name') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-5">
          <input type="password" name="password" class="form-control rounded @error('name') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Create an account</button>
      </form>

      <small class="d-block text-center mt-4">Already have an account? <a href="/login" class="text-decoration-none">Login Now</a></small>

    </main>
  </div>
</div>


@endsection