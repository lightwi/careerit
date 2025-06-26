<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @stack('stylelinks')
  @stack('styles')

</head>

<body>

  @yield('content')

  <!-- scripts -->
  <script src="{{ asset('vendor/tailwind/tailwind.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- tailwind config -->
  <script src="{{ asset('vendor/tcConfig.js') }}"></script>
  <script src="{{ asset('vendor/main.js') }}"></script>

  @stack('scrlink')
  @stack('scripts')
</body>

</html>

@yield('models')