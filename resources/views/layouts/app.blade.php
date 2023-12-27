<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="img/Main Logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pulse Guard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')
    @yield('content')
</body>

</html>
