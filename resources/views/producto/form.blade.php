    @include('producto.bs5')
    <p >Nombre del producto</p>
    <input class="form-control" name="nombre" value="{{ isset($producto->nombre) }}" type="text">
    <p>Precio del producto</p>
    <input class="form-control" name="Precio" value="{{ isset($producto->Precio) }}" type="number">
    <p>Cantidad de Stock</p>
    <input class="form-control" name="Stock" value="{{ isset($producto->Stock) }}" type="number"> 
    <input type="submit" class="btn btn-primary my-2" value="Enviar">