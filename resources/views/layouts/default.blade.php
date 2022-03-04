<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('pageTitle') | Comics</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
 
    {{-- Navbar uguale per tutte le pagine --}}
 {{-- @include("partials.navbar")--}}
  @include("partials.headerBox")
  

  {{-- Footer uguale per tutte le pagine --}}
  <div>
    @yield('content')
  </div>

  @include("partials.footer")
  @include("partials.headerFooterBox")
  

</body>

</html>