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
            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
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
  <form action="{{ route('productos.update', ['producto' => $producto->id]) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" name="name" value="{{ old('name') ?? $producto->name }}" class="form-control" placeholder="name">
            </div>
        </div>
  
  
  
  
  
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tamaño:</strong>
                <input type="text" name="tamano" value="{{ old('tamano') ?? $producto->tamano }}" class="form-control" placeholder="tamano">
            </div>
        </div>
  







  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Descripcion:</strong>
        <input type="text" name="descripcion" value="{{ old('descripcion') ?? $producto->descripcion }}" class="form-control" placeholder="descripcion">
    </div>
</div>






<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
        <strong>price:</strong>
        <input type="number" name="price" value="{{ old('price') ?? $producto->price }}" class="form-control" placeholder="price">
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

