<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="main-layout">
    @include('partials.navbar')
    @yield('content')
  </div>
</body>
</html>