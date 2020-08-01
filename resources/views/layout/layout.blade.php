<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>

</head>
<body>  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Music Time Machine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <font size=5>|</font>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/2010_2011">2010 - 2011<span class="sr-only">(current)</span></a>
      </li>
      <font size=5>|</font>
      <li class="nav-item">
        <a class="nav-link" href="/2012_2013">2012 - 2013</a>
      </li>
      <font size=5>|</font>
      <li class="nav-item">
        <a class="nav-link" href="/2014_2015">2014 - 2015</a>
      </li>
      <font size=5>|</font>
      <li class="nav-item">
        <a class="nav-link" href="/2016_2017">2016 - 2017</a>
      </li>
      <font size=5>|</font>
      <li class="nav-item">
        <a class="nav-link" href="2018_2019">2018 - 2019</a>
      </li>
      <font size=5>|</font>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mas información
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/contactus">Contact us</a>
          <a class="dropdown-item" href="/aboutus">About us</a>
          <a class="dropdown-item" href="/creador">More info</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<p></p>
@yield('content')
</div>
  
</body>
</html>