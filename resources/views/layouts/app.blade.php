<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-qVkn5fZmVbY7eUOq7+97o1s+MwV1+rIOKj7ewZ5ixv9fNs5xyW54+vpZ7fI0P/jC" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq3jOM8iXDATIS47ai6f3xYVVFAXHtcEMDUz32OACEmmJWnU5f" crossorigin="anonymous"></script>
</body>
</html>
