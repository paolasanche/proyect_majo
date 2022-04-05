 <html>
<head>
    <title>edicion de compra</title>
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
            <a class="btn btn-primary" href="{{ route('compras.index') }}"> Back</a>
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
  <form action="{{ route('compras.update', ['compra' => $compra->id]) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID pedido:</strong>
                <input type="number" name="pedido_id" value="{{ old('pedido_id') ?? $compra->pedido_id }}" class="form-control" placeholder="pedido_id">
            </div>
        </div>
  
  
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID producto:</strong>
                <input type="number" name="producto_id" value="{{ $compra->producto_id }}" class="form-control" placeholder="producto_id">
            </div>
        </div>
  







  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>ID Cliente:</strong>
        <input type="number" name="cliente_id" value="{{ $compra->cliente_id }}" class="form-control" placeholder="cliente_id">
    </div>
</div>






<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
        <strong>Estado compra:</strong>
        <input type="text" name="estado_compra" value="{{ $compra->estado_compra }}" class="form-control" placeholder="estado_compra">
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

