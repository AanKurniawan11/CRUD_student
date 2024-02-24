<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
       .navbar {
            background-color: #fff; /* Warna latar belakang navbar */
            border-bottom: 1px solid #108DE9; /* Warna garis bawah */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        }

        .navbar-toggler-icon {
            background-color: #ffd700; /* Warna ikon toggle navbar */
        }

        .navbar-nav .nav-link {
            color: #108DE9 !important; /* Warna teks link */
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s ease; /* Animasi perubahan warna */
        }

        .navbar-nav .nav-link:hover {
            color: #1B3C73 !important; /* Warna teks link saat hover */
        }

        .navbar-nav .nav-item.active .nav-link {
            background-color: #ffd700; /* Warna latar belakang link aktif */
            color: #435585 !important; /* Warna teks link aktif */
        }

        .navbar-brand {
            margin-right: 20px;
            color: #ffd700; /* Warna teks brand */
            font-size: 24px;
            font-weight: bold;
            transition: color 0.3s ease; /* Animasi perubahan warna */
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        
        .my{
            color: #108DE9;
            margin-right: 90px;
            font-weight: 700;
        }


    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
    <h4 class="my"><i class="bi bi-buildings-fill" ></i>  MY SCHOOL</h4>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dash">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/student/all">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
