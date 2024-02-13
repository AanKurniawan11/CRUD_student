@extends('layouts.main')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

@section('content')
<main class="form-signin w-50 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Email Addres</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <br>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="text-center">already have an account?  <a href="/login">Login</a></p> 

  </form>
</main>
@endsection

