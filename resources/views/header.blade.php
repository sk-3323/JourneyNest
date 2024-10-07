<!DOCTYPE html>
<html lang="en">

<head>
    <title>Journey Nest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

    <script>
        const functionDelete = (e) => {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure to booking?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Confirm it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Confirm Order!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Journey Nest<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/packagelist" class="nav-link">Explore</a></li>
                    <li class="nav-item"><a href="/cart" class="nav-link">Booking</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item d-flex justify-content-center align-items-center">
                        @if (session()->has('user'))
                            <a class="nav-link" href="/logout">
                                Logout
                            </a>
                            {{-- </li> --}}
                            {{-- <li class="nav-item"> --}}

                            <p class="text-secondary mt-3">Hi, {{ session('user')->username }}!</p>
                            {{-- </li> --}}
                        @else
                            {{-- <li class="nav-item"> --}}
                            <a class="nav-link" href="/login" class="">
                                <i class="fa-solid fa-user"></i> Login
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
