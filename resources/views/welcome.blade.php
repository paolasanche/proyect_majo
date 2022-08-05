<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/estilos3.css">
    <title>MAJO</title>
    <style>
      body { background-image: url("https://i.pinimg.com/originals/f1/bc/c7/f1bcc7e63403ff9ad8cdc972dfea1ef1.jpg" }
 </style>
  </head>
  <header>
    <nav>
<ul id="menu">
<li><a href="https://zapatosmajo.online/">Inicio</a</li>
<div class="login" aling="right">  
@if (Route::has('login'))
<li>@auth
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-2000 underline">Dashboard</a>
</li>
@else
<li><a href="{{ route('login') }}" class="text-sm text-gray-2000 underline">Iniciar Sesión</a></li>a

@if (Route::has('register'))

  <li>    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-2000 underline">Registrate</a></li>
  

  @endif
  
  @endauth
  
  </div>
  
  @endif
</ul>
</nav>
    </header>
  <body>
 
    
    <center>
      <div class="proyectos" ><h1>Zapateria Majo</h1>
      <h4>Puedes consultar mi proyecto en el siguiente link: <a href="https://zapatosmajo.online/">ZAPATERIA MAJO<a></p>
       <h4>Este proyecto se ha ido manejando denro de la universidad desde el cuarto cuatrimestre, desde entonces se le han hecho un sibn fin de modificaciones para que se llegara al resultado que tenemos ahora.</p>
    <center><img class="principal" src="img/logo.jpg"  width="330"  height="180" ></center></br>
    
    <div class="mapa" ><h1>Zapateria Majo</h1>
      <h4>ENCUENTRANOS</h4>
      <p>
       <div class="mapa">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.8036151500787!2d-99.53918268578458!3d19.247388751566028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf4b62c7dde75%3A0x3ed5c16657bcdbd!2sAv.%20Independencia%20102%2C%20Guadalupe%2C%2052147%20San%20Gaspar%20Tlahuelilpan%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1654236928691!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </p></br>
         </div>
</center>
      </div>
      
     





  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/efectos.js"></script>
  <br><br><br><br><br><br>
  </body>
</html>