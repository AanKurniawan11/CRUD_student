@extends('layouts.main')

@section('content')



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

    #sig {
        font-size: 20px; /* Mengurangi ukuran font */
        font-weight: 600;
    }

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

<body>
    <main class="form-signin">
        <form method="POST" action="/login/add">
            @csrf
            <h1 class="h3 mb-5 fw-bold text-center">Login</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2 mb-3" type="submit" id="sig">Sign in</button>
            <p class="mt-5 mb-3 text-center">Belum punya akun? <a href="/signin">register</a></p>
        </form>
    </main>
</body>

@endsection
