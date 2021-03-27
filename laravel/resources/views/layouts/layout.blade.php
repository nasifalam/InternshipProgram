<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <style>
        .nav{
          display:flex; justify-content:space-between;align-items:center;
          padding:15px 30px;  border-bottom:1px solid grey;
        }
        .navLayout{
          font-size: 18px; 
        }
        .sidebar{
          display:flex; 
        }
        .sidbarItems{height:100%;width:100px}
      </style>
    </head>
    
    <body class="antialiased">
      <div class="nav">
        <div class="navLayout">Building-U</div>
        <div class="sidebar">
            <a class="sidbarItems" href="/manage_programs">Manage</a>
            <a class="sidbarItems" href="/search_programs_v2">Programs</a>
            <a href="/">Home</a>
        </div>
      </div>
    
      <div>
        @yield('content')
      </div>

      <footer>
        Copyright 2020
      </footer>
    </body>

</html>
