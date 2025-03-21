<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
      html, body {
            font-family: "Share Tech Mono", monospace;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body>
    @include('partials/header')

    @yield('contenuto')

    @include('partials/footer')
</body>
</html>