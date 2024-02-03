<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>HRIS</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-flags.min.css?168410606') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-payments.min.css?168410606') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-vendors.min.css?168410606') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <script src="{{ asset('assets/js/tabler.min.js?1684106062') }}" defer></script>

    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
