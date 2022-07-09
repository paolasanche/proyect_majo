<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MAJO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{margin:0}a{background-color:transparent}[hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}
            *,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
            a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}
            video{max-width:100%;height:auto}
            .bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}
            .bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}
            .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}
            .border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}
            .items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}
            .h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}
            .mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}
            .ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}
            .-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}
            .p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}
            .fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}
            .text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}
            .text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}
            .text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
            .text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}
            .text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}
            .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}
            .text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}
            .antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
            .w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}
            .grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}
            .sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}
            .sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}
            .md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}
            .dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}
            .dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            pre, p {
    font-size: 1.5em;
    color: #FE7F88;
    background-color: #FFFF;
}

div {
  background-image: url("data:image/jpeg;base64,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");
}

p {
  background-color:#FFFF;
}

.fondo {
  background-image:  url("https://mdn.mozillademos.org/files/11991/startransparent.gif");
  background-color: transparent;
}
.contenido {
  background-image:  url("https://mdn.mozillademos.org/files/11991/startransparent.gif");
  background-color: transparent;
}*/
        </style>

        <style>
            body {
                background : #FA9FC9;
               /* background-image:  url("https://thumbs.dreamstime.com/z/modelo-del-cosm%C3%A9tico-de-la-moda-73687326.jpg");*/

            }
            .index {
                align:center;
  background-image:  url("https://mdn.mozillademos.org/files/11991/startransparent.gif"),
                     url("https://mdn.mozillademos.org/files/7693/catfront.png");
 
}
form {
  position : relative;
  width  : 1440px;
  height : 1300px;
  margin : 0 auto;
  padding: 2em;
  box-sizing: border-box;
  /*background : #FA9FC9;*/
  background-image:  url("https://thumbs.dreamstime.com/z/modelo-del-cosm%C3%A9tico-de-la-moda-73687326.jpg");

  /* creamos nuestra malla (grid) */
  display  : grid;
  grid-gap : 20px;
  grid-template-columns : repeat(2, 1fr);
  grid-template-rows    : 10em 1em 1em 1em;
}

.principal {
                align:center;
                
 
}
.informacion { 
    margin-left:200px;
    margin-right:80px;
    margin-top:50px;
    padding: 2em;
  background-image:  url("https://i.pinimg.com/736x/65/5e/88/655e884b27961db30f885e6482a44b12.jpg");
  opacity: 0.82;
 }
        /*word art*/
 @import url('https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Exo:wght@900&display=swap');


.lines {
  $color: #59c1fe;
  position: fixed;
  width: 100vw;
  height: 4em;
  background: linear-gradient(rgba($color, 0.2) 20%, $color 40%, $color 60%, rgba($color, 0.2) 80%);
  background-size: 1px 0.5em;
  box-shadow: 0 0 1em rgba($color, 0.4);
  transform: translateY(-1em);
  left: 0;
}

h1 {
  position: relative;
  font-family: 'Exo';
  font-size: 3em;
  margin: 0;
  transform: skew(-15deg);
  letter-spacing: 0.03em;
  
  &::after {
    content: '';
    position: absolute;
    top: -0.1em;
    right: 0.05em;
    width: 0.4em;
    height: 0.4em;
    background: 
      radial-gradient(white 3%, rgba(white, 0.3) 15%, rgba(white, 0.05) 60%, transparent 80%),
      radial-gradient(rgba(white, 0.2) 50%, transparent 60%) 50% 50% / 5% 100%,
      radial-gradient(rgba(white, 0.2) 50%, transparent 60%) 50% 50% / 70% 5%;
    background-repeat: no-repeat;
  }
  
  span:first-child {
   
    text-shadow: 0 0 0.1em #8ba2d0, 0 0 0.2em black,  0 0 5em #165ff3;
    -webkit-text-stroke: 0.06em rgba(black, 0.5);
  }
  
  span:last-child {
    position: absolute;
    left: 0;
    top: 0;
    background-image: linear-gradient(#032d50 25%, #00a1ef 35%, white 50%, #20125f 50%, #8313e7 55%, #ff61af 75%);
    -webkit-text-stroke: 0.01em #94a0b9;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
}

h2 {
  font-family: 'Mr Dafoe';
  margin: 0;
  font-size: 3.3em;
  margin-top: -0.6em;
  color: white;
  text-shadow: 0 0 0.05em #fff, 0 0 0.2em #fe05e1, 0 0 0.3em #fe05e1;
  transform: rotate(-7deg);
}

h3 {
  font-family: 'Mr Dafoe';
  margin: 0;
  font-size: 1.5em;
  margin-top: -0.6em;
  color: black;
  text-shadow: 0 0 0.05em #fff, 0 0 0.2em #fe05e1, 0 0 0.3em #fe05e1;
  transform: rotate(0deg);
}


.grid {
  $main: #7d41e6;
  $glow: rgba(#2e26ff, 0.4);
  background: 
    linear-gradient(transparent 65%, $glow 75%, $main 80%, $glow 85%, transparent 95%),
    linear-gradient(90deg, transparent 65%, $glow 75%, $main 80%, $glow 85%, transparent 95%);
  background-size: 30px 30px;
  width: 200vw;
  height: 300vh;
  position: absolute;
  bottom: -120vh;
  transform: rotateX(-100deg);
  -webkit-mask-image: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,0) 80%);
}
p{
    font-style: italic;
    font-size:20px;
}


.login {
  align:right;
  font-family: 'Mr Dafoe';
  margin: 0;
  font-size: 1.5em;
  margin-top: -0.6em;
  color: black;
  text-shadow: 0 0 0.05em #fff, 0 0 0.2em #fe05e1, 0 0 0.3em #fe05e1;
  transform: rotate(0deg);
}










        </style>
    </head>

    
    <body >
        <div class="content">
            




	        <div class="container">   

            </div>



            <div class="row">
               <form>   
                    <div class="col-md-4">
                        <div class="card card-chart">
                                                       
                            <div class="card-body">








                               <table class="informacion"  width="1000">
                                   <tr>
                                        <th colspan="3">

                                        </th>
                                        

                                       <th>
                                            <div class="login" aling="right">  
                                                @if (Route::has('login'))
                                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                       @auth
                                                             <a href="{{ url('/dashboard') }}" class="text-sm text-gray-2000 underline">Dashboard</a>
                                                             @else
                                                             <a href="{{ route('login') }}" class="text-sm text-gray-2000 underline">Log in</a>

                                                                 @if (Route::has('register'))
                                                                         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-2000 underline">Register</a>
                                                                 @endif

                                                        @endauth
                            
                                                    </div>

                                                @endif

                                                        
                                            </div>
                                       </th>
                                   </tr>

                                    <tr>

                                        <th colspan="4">

                                            <div class="grid">
                                            </div>


                                            <div class="lines">                                                
                                            </div>
                                        
                                            <h1>
                                                
                                                <span>ZAPATERIA</span>
                                            </h1>
                                            <h2>
                                                 Majo
                                            </h2>
                                        </th>
                                       
                                    </tr>


                                 

                                    <tr>

                                        <th colspan="4">
                                            <img class="principal" src="img/logo.jpg"  width="330"  height="180" >
                                        </th>


                                    </tr>
                                    <tr><th><br><br></th></tr>
                                    <tr>
                                        <th>
                                            <h3>  ACERCA DE NOSOTROS  </h3>
                                        </th>
                                    
                                    </tr>

                                    <tr>

                                        <th colspan="4">
                                            <p>
                                                Calzado Ma Jo es un negocio de calzado de dama desarrollado por la familia Fernández, con el objetivo de ofrecer a los clientes calzado de buena calidad, se dieron a conocer por medio de ventas dentro de la plaza azul en el municipio de San Mateo Atento.
                                                <br>
                                                En el inicio de la pandemia por protocolos de seguridad cerraron dicha plaza, los encargados de calzado Ma Jo decidieron ofrecer sus servicios mediante la aplicación Facebook, dentro de esta aplicación ellos dan a conocer sus productos, mediante el chat atienden a sus clientes otorgando información acerca de los productos de su interés y haciendo entrega en puntos medios del municipio de San Mateo Atenco.

                                            </p>
                                        </th>



                                    </tr>
                                    <tr><th><br><br></th></tr>
                                    <tr>
                                        <th>
                                            <h3>  ENCUENTRANOS  </h3>
                                        </th>
                                    
                                    </tr>

                                    <tr>

                                        <th colspan="4">
                                            <p>
                                               <div class="mapa">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.8036151500787!2d-99.53918268578458!3d19.247388751566028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf4b62c7dde75%3A0x3ed5c16657bcdbd!2sAv.%20Independencia%20102%2C%20Guadalupe%2C%2052147%20San%20Gaspar%20Tlahuelilpan%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1654236928691!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                               </div>
                                        </th>



                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </form>                         
            </div>

        </div>

    </body>
</html>
