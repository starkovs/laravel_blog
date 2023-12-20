<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
</head>
<style>
    .container {max-width: 720px;}
    .required:after { content:'*'; color: red; margin-left: 3px; }
</style>
<body>
    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.header')
        <main class="flex-grow-1 py-3 text-center">
            @yield('content')
        </main>

        @include('includes.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>
</html>
