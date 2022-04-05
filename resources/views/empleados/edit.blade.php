 <html>
<head>
    <title>edicion de cliente</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="demo/demo.css" rel="stylesheet" />
</head>
<body>
  
<div class="container">
    

 
     <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Employed</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
        </div>
    </div>
  </div>
  
  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form action="{{ route('empleados.update', ['empleado' => $empleado->id]) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre_empleado" value="{{ old('nombre_empleado') ?? $empleado->nombre_empleado }}" class="form-control" placeholder="nombre_empleado">
            </div>
        </div>
  
  
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input type="number" name="telefono_empleado" value="{{ $empleado->telefono_empleado }}" class="form-control" placeholder="telefono_empleado">
            </div>
        </div>
  







  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Correo:</strong>
        <input type="email" name="correo_empleado" value="{{ $empleado->correo_empleado }}" class="form-control" placeholder="correo_empleado">
    </div>
</div>






<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
        <strong>Edad:</strong>
        <input type="number" name="edad_empleado" value="{{ $empleado->edad_empleado }}" class="form-control" placeholder="edad_empleado">
   </div>
</div>








<div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
         <strong>Direccion:</strong>
         <input type="text" name="direccion_empleado" value="{{ $empleado->direccion_empleado }}" class="form-control" placeholder="direccion_empleado">
    </div>
</div>









<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
     <strong>Puesto:</strong>
     <input type="text" name="puesto_empleado" value="{{ $empleado->puesto_empleado }}" class="form-control" placeholder="puesto_empleado">
</div>
</div>























<div class="col-xs-12 col-sm-12 col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>

</div>
   
</body>
</html>

