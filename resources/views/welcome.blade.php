<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ve-store API</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Tailwind CSS Styles */
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f3f4f6;
                margin: 0;
                padding: 0;
            }
            .landing-cover {
                background-image: url('/images/cover-image.webp'); /* Make sure the image path is correct */
                background-size: cover;
                background-position: center;
                height: 100vh; /* Full screen height */
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .cover-content {
                color: #fff;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 40px;
                text-align: center;
                border-radius: 10px;
            }
            .title {
                font-size: 3rem;
                font-weight: bold;
                margin: 0;
            }
            .subtitle {
                font-size: 1.5rem;
                margin-top: 10px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="landing-cover">
            <div class="cover-content">
                <h1 class="title">Welcome to ve-store API</h1>
                <p class="subtitle">Your gateway to seamless e-commerce integration</p>
            </div>
        </div>
    </body>
</html>
