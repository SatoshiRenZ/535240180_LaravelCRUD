<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #0000;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid #000;
            border-color: #000000;
            border-radius: 20px;
            border-width: 4px;
            backdrop-filter: blur(10px);
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid #000000;
            color: #000000;
            border-radius: 10px;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid #4500e5;
            box-shadow: none;
        }
        .btn-primary {
            background: #4500e5;
            border: none;
            cursor: pointer
        }
        .btn-primary:hover {
            background: #6a11cb;
        }
        .btn-primary:active {
            background: #F08080;
        }
        .btn-link {
            color: #000000;
            text-decoration: underline;
        }
        .btn-link:hover {
            color: #4500e5;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="text-center mb-4">Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                            <div class="text-center">
                                <p>Don't have an account? <a class="btn btn-link" href="{{ route('register') }}">Register here</a></p>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>