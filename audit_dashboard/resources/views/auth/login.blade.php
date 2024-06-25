<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .login-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-box h1 {
            color: #b71c1c;
            margin-bottom: 20px;
        }
        .login-box img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #b71c1c;
            border: none;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #d32f2f;
        }
        .form-check {
            text-align: left;
            margin-bottom: 15px;
        }
        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #b71c1c;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Audit Dashboard</h1>
            <p>Track your all Audit Reports at one place!</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter SSO Email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                <a href="#" class="forgot-password">Forgot password?</a>
            </form>
        </div>
    </div>
    <div class="footer">
        Copyrights © 2023 Computer Age Management Services Ltd.
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
