<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VideoGaemBlog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            color: #1a202c;
            line-height: 1.5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo svg {
            width: 60%;
            height: 60%;
            fill: #ff2d20;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .links {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .link {
            padding: 10px 20px;
            background-color: #fff;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .link:hover {
            background-color: #e5e7eb;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-12 h-12 stroke-red-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 ..." />
            </svg>
        </div>
        <div class="title">Welcome to VideoGameBlog!</div>
        <div class="links">
            @if (Route::has('login'))
            <a href="{{ url('/dashboard') }}" class="link">Dashboard</a>
            @auth
            @else
            <a href="{{ route('login') }}" class="link">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="link">Register</a>
            @endif
            @endauth
            @endif
        </div>
    </div>
</body>

</html>