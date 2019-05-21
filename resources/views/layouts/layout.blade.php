<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','REMS')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="http://www.codermen.com/js/jquery.js"></script>



</head>
<body>
<div class="container">
 {{--  @include('layouts.nav')
  
  @if(session()->has('message'))
       <div class="alert alert-success">
        {{ session('message') }}
       </div>
  @endif --}}

  @yield('content')
</div>

</body>
</html>
