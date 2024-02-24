@extends('layouts.main')

@section('content')
<main class="form-signin w-50 m-auto">
    <form action="/signin/add" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

        <div class="form-floating">
            <input type="name" class="form-control" id="floatingName" placeholder="Name" name="name">
            <label for="floatingName">Name</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">
            <label for="floatingEmail">Email Address</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <br>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
        <p class="text-center">Already have an account? <a href="/login">Login</a></p>
    </form>
</main>
@endsection

<style>
    body {
        background-color: #f8f9fa; /* Ubah warna background sesuai kebutuhan */
    }

    main {
        background-color: #fff; /* Ubah warna background sesuai kebutuhan */
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        padding: 40px;
        margin-top: 50px;
    }

    .form-floating input[type=name],
    .form-floating input[type=email],
    .form-floating input[type=password] {
        border-radius: 20px; /* Membuat sudut input lebih melengkung */
        padding: 15px; /* Mengubah ukuran padding */
        border: none; /* Menghapus border */
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk input */
    }

    .form-floating label {
        font-size: 16px; /* Ukuran font label */
    }

    .btn-primary {
        background-color: #007bff; /* Warna tombol */
        border: none;
        border-radius: 20px;
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s ease; /* Efek transisi saat hover */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Warna tombol saat hover */
    }

    .form-signin {
        max-width: 400px; /* Lebar maksimum form */
        margin: auto;
    }

    .mt-5 {
        margin-top: 20px; /* Ruang atas */
    }

    .mb-5 {
        margin-bottom: 20px; /* Ruang bawah */
    }

    a {
        color: #007bff; /* Warna link */
        text-decoration: none; /* Hapus garis bawah */
    }

    a:hover {
        text-decoration: underline; /* Garis bawah saat hover */
    }
</style>
