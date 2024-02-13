<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       .navbar {
            background-color: #435585;
            border-bottom: 2px solid #fff;
        }

        .navbar-toggler-icon {
            background-color: #435585;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700 !important;
        }

        .navbar-nav .nav-item.active .nav-link {
            background-color: #ffd700;
            color: #1a75ff !important;
        }

        .navbar-brand {
            margin-right: 20px;
            color: #ffd700;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-brand:hover {
            text-decoration: none;
            color: #ffd700;
        }


    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- <h3 class="navbar-brand"> Student</h3> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link "  href="/student/all" >Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kelaz/all">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "  href="/login" i>Login</a>
                </li>
            </ul>
        </div>
      
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
