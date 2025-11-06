<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUBS MENTAL HEALTH</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <!-- <img src="Resources/log/hp.svg" alt="School Logo" width="50px"> -->
                <img src="Resources/SVG/real1.svg" alt="School Logo" width="60px">
                <h1>MUBS</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <!-- <li><a href="index.php" class="active">Home</a></li> -->
                    <li><a href="{{url('/Contact')}}">Contact Us</a></li>
                    <li><a href="{{url('/Education')}}">Educational Resouces</a></li>
                    <!-- <li><a href="#students">Students</a></li> -->
                    <li><a href="{{url('/Story')}}">Stories&Testimonies</a></li>
                    {{-- <li><a href="{{url("admin")}}">Admin</a></li> --}}
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>

                   
                </ul>
            </nav>
                      <!-- <div class="auth-buttons">
                <button id="loginBtn">Login</button>
                <button id="registerBtn">Register</button>
            </div> -->
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>