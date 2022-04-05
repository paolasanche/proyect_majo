 <html>
<head>
    <title>edicion de cliente</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    

 
     <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Client</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
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
  <form action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre_cliente" value="{{ old('nombre_cliente') ?? $cliente->nombre_cliente }}" class="form-control" placeholder="nombre_cliente">
            </div>
        </div>
  
  
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input type="number" name="telefono_cliente" value="{{ old('telefono_cliente') ?? $cliente->telefono_cliente }}" class="form-control" placeholder="telefono_cliente">
            </div>
        </div>
  







  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Correo:</strong>
        <input type="email" name="correo_cliente" value="{{old('correo_cliente') ??  $cliente->correo_cliente }}" class="form-control" placeholder="correo_cliente">
    </div>
</div>






<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
        <strong>Edad:</strong>
        <input type="number" name="edad_cliente" value="{{old('edad_cliente') ??  $cliente->edad_cliente }}" class="form-control" placeholder="edad_cliente">
   </div>
</div>








<div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
         <strong>Direccion:</strong>
         <input type="text" name="direccion_cliente" value="{{old('direccion_cliente') ??  $cliente->direccion_cliente }}" class="form-control" placeholder="direccion_cliente">
    </div>
</div>









<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
     <strong>Estado:</strong>
     <input type="text" name="estado_cliente" value="{{old('estado_cliente') ??  $cliente->estado_cliente }}" class="form-control" placeholder="estado_cliente">
</div>
</div>









<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Municipio:</strong>
   <input type="text" name="municipio_cliente" value="{{old('municipio_cliente') ??  $cliente->municipio_cliente }}" class="form-control" placeholder="municipio_cliente">
</div>
</div>









<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Código Postal:</strong>
    <input type="text" name="codigopostal_cliente" value="{{ old('codigopostal_cliente') ?? $cliente->codigopostal_cliente }}" class="form-control" placeholder="codigopostal_cliente">
</div>
</div>








<div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
         <strong>Forma de pago:</strong>
         <input type="text" name="forma_pago" value="{{old('forma_pago') ??  $cliente->forma_pago }}" class="form-control" placeholder="forma_pago">
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

