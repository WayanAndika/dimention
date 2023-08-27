<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <title> {{ $title }} </title>
  <style>
    :root{
    --primary:#E2C47B;
    --secondary:#FFFFFF;
    --ternary:#322F2B;
}

body{
    background: linear-gradient(to right, var(--primary), var(--ternary));
    background-attachment: fixed;
}
.home-layout{
    background-image: url("/images/main-img.png");
    background-repeat: no-repeat;
    background-position: bottom right;
    height: 100vh;
}

.third-content {
    background-image: url("/images/tenun.png");
    background-repeat: no-repeat;
    height: 100vh;
    background-size: cover;
}
.fourth-content {
    background-image: url("/images/barong.png");
    background-repeat: no-repeat;
    height: 100vh;
    background-size: cover;
}
  </style>
</head>
<body>
  @yield('content')

  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>