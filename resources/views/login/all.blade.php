{{-- @extends('layouts.main')
@section('container')
    <style>
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
            margin-top: 15%;
            margin-left: 37%;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

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
    </style>

    <main class="form-signin w-100">
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role alert>
                {{ session('success') }}
            </div>
        @endif
        <form method="post" action="/login/login">
            @csrf
            <h1 align=center class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('name') }}"
                    placeholder="herman willem daendels">
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    value="{{ old('password') }}" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
        </form>
    </main>
@endsection --}}
@extends('layouts.main')
@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <style>
            body {
                background-color: #e9ecef;
            }

            .login-form {
                margin: 10% auto;
                max-width: 500px;
                background-color: #fff;
                padding: 40px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .login-form h2 {
                text-align: center;
                margin-bottom: 30px;
                color: #495057;
            }

            .login-form input[type="email"],
            .login-form input[type="password"] {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: none;
                border-radius: 5px;
                background-color: #f4f4f4;
                margin-bottom: 25px;
            }

            .login-form input[type="email"]:focus,
            .login-form input[type="password"]:focus {
                outline: none;
                background-color: #e6e6e6;
            }

            .login-form button[type="submit"] {
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
                margin-bottom: 10%;
            }

            .login-form button[type="submit"]:hover {
                background-color: #0f9d8e;
            }

            .login-form p {
                font-size: 14px;
                text-align: center;
            }

            .login-form p a {
                color: #20c997;
                text-decoration: none;
            }

            .login-form p a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <form class="login-form" method="post" action="/login/auth">
            @csrf
            <h2>Login Form</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                placeholder="Email address">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}"
                placeholder="Password">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p>Don't have an account? <a href="/register/all">Sign up</a></p>
        </form>

        <!-- Bootstrap JavaScript and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
