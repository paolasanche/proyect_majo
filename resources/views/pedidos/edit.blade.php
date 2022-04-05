 <html>
<head>
    <title>edicion de pedido</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    

 
     <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Pedido</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
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
  <form action="{{ route('pedidos.update', ['pedido' => $pedido->id]) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fecha de registro:</strong>
                <input type="date" name="fecha" value="{{ old('fecha') ?? $pedido->fecha }}" class="form-control" placeholder="fecha">
            </div>
        </div>
  
  
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Producto:</strong>
                <input type="number" name="producto_id" value="{{ $pedido->producto_id }}" class="form-control" placeholder="producto_id">
            </div>
        </div>
  







  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>ID Cliente:</strong>
        <input type="number" name="cliente_id" value="{{ $pedido->cliente_id }}" class="form-control" placeholder="cliente_id">
    </div>
</div>






<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
        <strong>Fecha de entrega:</strong>
        <input type="datetime-local" name="fecha_entrega" value="{{ $pedido->fecha_entrega }}" class="form-control" placeholder="fecha_entrega">
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

