@extends('layouts.main')

@section('content')
<main class="form-signin w-50 m-auto">
  <form>
  <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <br>
    <br>
    <p class="text-center">Don't have an account?  <a href="/signin">Register</a></p> 
  </form>
</main>
@endsection

 