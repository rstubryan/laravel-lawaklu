<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-[#EDF3F1]">
  <div class="container mx-auto">
    <div class="py-9 mr-10 ml-10">

      <div class="z-50 sticky top-0">
        @include('partials.navbar')
      </div>

      <div class>
        @yield('content')
      </div>
    </div>
  </div>
  <style>
    .container {
      width: 100%;
      max-width: 1200px;
    }
  </style>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>