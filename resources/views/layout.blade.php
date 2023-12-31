<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project BNCC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kelompok 13</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @guest
        <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>Login</a></li>
        <li><a href="{{ url('registration') }}"><span class="glyphicon glyphicon-log-in"></span>Registration</a></li>
      @else
        <li><a href="{{ url('logout') }}"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
      @endguest
    </ul>
  </div>
</nav>


    <div class="container">
    <!-- @yield('content')
   <h3>TPM PROJECT</h3>
  <p>Ceritanya ini dashboard</p>  -->
</div>

</body>
</html>