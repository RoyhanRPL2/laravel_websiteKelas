@extends('layouts.main')
@section('container')
    {{-- <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.108.0">
        <title>Signin Template · Bootstrap v5.3</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            html,
            body {
                height: 100%;
            }

            body {
                align-items: center;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 2 0;
            }

            .form-signin .form-floating:focus-within {
                z-index: 2;
            }

            .form-signin input[type="name"] {
                margin-bottom: 20px;
                
            }

            .form-signin input[type="email"] {
                margin-bottom: 20px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
    </head>

    <body class="text-center">

        <main class="form-signin w-100 position-absolute top-50 start-50 translate-middle">
            <form method="post" action="/register/add"> 
                @csrf
                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-floating">
                    <input type="name" class="form-control" name="name" id="floatingInput" value="{{ old(('name')) }}" placeholder="masukkan nama">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="floatingInput" value="{{ old(('email')) }}" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" value="{{ old(('password')) }}" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
        </main>



    </body>

    </html> --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <style>
            body {
                background-color: #e9ecef;
            }

            .register-form {
                margin: 10% auto;
                max-width: 500px;
                background-color: #fff;
                padding: 40px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .register-form h2 {
                text-align: center;
                margin-bottom: 30px;
                color: #495057;
            }

            .register-form input[type="name"],
            .register-form input[type="email"],
            .register-form input[type="password"] {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: none;
                border-radius: 5px;
                background-color: #f4f4f4;
                margin-bottom: 25px;
            }

            .register-form input[type="text"]:focus,
            .register-form input[type="email"]:focus,
            .register-form input[type="password"]:focus {
                outline: none;
                background-color: #e6e6e6;
            }

            .register-form button[type="submit"] {
                width: 100%;
                border: none;
                padding: 12px;
                border-radius: 5px;
                font-size: 18px;
                font-weight: bold;
                color: #fff;
                background-color: #20c997;
                cursor: pointer;
                transition: background-color 0.3s ease;
                margin-bottom: 5%;
            }

            .register-form button[type="submit"]:hover {
                background-color: #0f9d8e;
            }

            .register-form p {
                font-size: 14px;
                text-align: center;
            }

            .register-form p a {
                color: #007bff;
                text-decoration: none;
            }

            .register-form p a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <form class="register-form" method="post" action="/register/add">
            @csrf
            <h2>Registration Form</h2>
            <label for="inputName" class="sr-only">Full Name</label>
            <input type="name" class="form-control" name="name" value="{{ old('name') }}"
                placeholder="Full Name">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email address"
                value="{{ old('email') }}">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password"
                value="{{ old('password') }}">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <p>Already have an account? <a href="/login/all">Log in</a></p>
        </form>

        <!-- Bootstrap JavaScript and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
