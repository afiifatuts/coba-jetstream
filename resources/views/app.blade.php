<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    {{-- <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/tabler.min.js') }}"></script> --}}
    <title>Ximply</title>
    <style>
        :root {
            --tblr-font-sans-serif: 'Poppins', 'Helvetica Neue', 'Segoe UI', 'Helvetica', 'Arial', sans-serif;
        }
    </style>

    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
