<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />

</head>
<body class="bg-white">
    <div class="mb-6">
        @yield('content')
    </div>
    <script src="https://unpkg.com/flowbite@1.3.2/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

</body>
</html>
