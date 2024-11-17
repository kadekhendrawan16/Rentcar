<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet" >
</head>
<style>
    /* General styles */
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Navbar styles */

    .navbar {
        background-color: #fff;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        color: #007bff;
        font-weight: bold;
    }

    .nav-link {
        color: #6c757d;
        padding: 0.5rem 1rem;
    }

    .nav-link:hover {
        background-color: #007bff;
    }

    /* Content styles */

    .container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 2rem;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    p {
        font-size: 1rem;
        line-height: 1.5;
    }

    /* Buttons styles */

    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Hendra Rentcar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ route('home') }}"><i class="fa-solid fa-house"></i>Home</a>
                    </li>
                    @if (Auth::user()->level == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}"><i class="fa-sharp fa-solid fa-user"></i> User</a>
                    </li>
                    @endif
                    @if (Auth::user()->level == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rentcar.index') }}"><i class="fa-sharp fa-solid fa-car"></i> Mobil</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sewa.index') }}"><i class="fa-sharp fa-solid fa-car"></i> Penyewaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori.index') }}"><i class="fa-solid fa-list"></i> Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.password') }}"><i class="fa-sharp fa-solid fa-key"></i> Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            // Add click event handler for the logout link
            $('a[href="{{ route('user.logout') }}"]').click(function (e) {
                e.preventDefault(); // Prevent the default behavior of the link
                // Display a confirmation alert
                if (confirm('Yakin mau logout?')) {
                    window.location.href = $(this).attr('href'); // Redirect to the logout route if confirmed
                }
            });
        });
    </script>
    
    <div class="container">
        <h1>{{ $title }}</h1>
        @yield('content')
    </div>
</body>

</html>
