<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AeroSmash Sport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #e8f1ff 0%, #ffffff 100%);
            font-family: Arial, sans-serif;
        }

        .login-card {
            background: #f0f7ff;
            border: 1px solid #ffffff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        .brand-title {
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            color: #084298;
        }

        .brand-subtitle {
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 1.5rem;
        }

        .btn-login {
            width: 100%;
        }
    </style>

</head>
<body>

<div class="login-card">
    <div class="text-center mb-3">
        <span style="font-size: 2rem;">🏸</span>
    </div>
    <div class="brand-title">AeroSmash Sport</div>
    <div class="brand-subtitle">Store Peralatan Badminton</div>

    <form action="{{ route('login.handle') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-login">
            <i class="bi bi-box-arrow-in-right"></i> Login
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
