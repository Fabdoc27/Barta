<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <title> @yield('title') | {{ env('APP_NAME', 'Barta') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    @yield('content')
</body>

</html>
