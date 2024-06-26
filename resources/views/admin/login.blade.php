@extends('layouts.layout')

@section('template')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="container d-flex justify-content-center align-items-center vh-100">

  <form action="{{ route('postlogin') }}" method="POST">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" name="email" required />
      <label class="form-label" for="form2Example1">Email address</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" name="password" required />
      <label class="form-label" for="form2Example2">Password</label>
    </div>
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
      </div>
  
      <div class="col-6">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  
    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="#!">Register</a></p>
      <p>or sign up with:</p>
      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>
  
      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>
  
      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>
  
      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>

</div>
</form>
@endsection

