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
    position: relative;
    height: 100vh; /* Full screen height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Ensure no overflow of the image */
  }

  .landing-cover img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: content; /* Make sure the image covers the entire area */
    z-index: -1; /* Place the image behind the content */
  }

  .cover-content {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px;
    text-align: center;
    border-radius: 10px;
    z-index: 1; /* Ensure content is above the image */
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
  <img src="/images/cover-image.webp" alt="Cover Image" />

</div>

    </body>
</html>
