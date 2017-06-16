<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>@yield('title')</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>
<body>
  <br>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">CompraVentaApp</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href='products'>List all products</a></li>
        <li><a href='cars' >List all cars</a></li>
        <li><a href='motorbikes' >List all motorbikes</a></li>
        <li><a href='create' >Add product</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(!Session::has('user'))
        <li><a href='register'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href='login'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        @else
        <li><a href='logout' >Logout</a></li>
        @endif
      </ul>
    </div>
  </nav>
  @yield('h1')
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
