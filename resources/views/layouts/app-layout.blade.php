@props(['title' => ''])

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} - {{ env('APP_NAME') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
  @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="antialiased">
  <x-header active="{{ $title }}" />
  <div class="wrapper px-6 sm:px-8 mt-20">
    <h1 class="text-xl font-bold">{{ $title }}</h1>

    {{ $slot }}
  </div>
</body>

</html>
