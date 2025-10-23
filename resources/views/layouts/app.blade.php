<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AeroSmash Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #0d6efd;
            --primary-dark: #084298;
        }
        
        html, body {
            height: 100%;
        }

        body {
            background: linear-gradient(135deg, #e8f1ff 0%, #ffffff 100%);
            background-attachment: fixed;
            color: #111827;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: linear-gradient(90deg, var(--primary-blue), var(--primary-dark));
        }
        .navbar .navbar-brand, .navbar .nav-link {
            color: #fff !important;
        }

        main {
            flex: 1;
            padding: 2rem;
        }

        .card {
            border: 1px solid #e3e6f0;
            border-radius: 10px;
            transition: all 0.2s ease;
        }
        .card-blue { border-left: 4px solid var(--primary-blue); }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .btn {
            transition: all 0.2s ease;
        }
        .btn:hover {
            transform: scale(1.03);
        }

        footer {
            background: #ffffff;
            padding: 1rem;
            border-top: 1px solid #e6f0ff;
            text-align: center;
        }

        h1, h2, h3, h4 {
            color: var(--primary-dark);
        }
    </style>

    @stack('head')
</head>
<body>

    @if(request()->has('username'))
        <x-navbar />
    @endif

    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
