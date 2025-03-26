<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container text-center" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; background: linear-gradient(135deg, #ff7eb3, #ff758c); color: white;">
        <h1 style="font-size: 8rem; font-weight: bold; margin: 0;">404</h1>
        <h2 style="font-size: 2rem; margin: 10px 0;">Oops! Page Not Found</h2>
        <p style="font-size: 1.2rem; margin-bottom: 20px;">We can't seem to find the page you're looking for.</p>
        <a href="{{ url('/') }}" class="btn btn-primary" style="padding: 10px 20px; font-size: 1rem; background-color: #ff4d6d; border: none; border-radius: 5px; color: white; text-decoration: none; transition: background-color 0.3s;">
            Go to Homepage
        </a>
    </div>
</body>
</html>