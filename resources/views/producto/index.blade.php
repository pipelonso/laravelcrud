
<div class="p-2 bg-p">


<a href="producto/create" class="btn btn-primary w-100">AGREGAR</a>
@include('producto.bs5')
<div class="table-responsive p-5 ">
    <table
        class="table table-dark rounded-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $prod)
            <tr class="">
                <td scope="row">{{ $prod->id }}</td>
                <td scope="row"> {{ $prod->nombre }} </td>
                <td scope="row"> {{ $prod->Precio }} </td>
                <td scope="row"> {{ $prod->Stock }} </td>
                <td scope="row"> 
                    <div class="navbar justify-content-end">
                        <a class="btn btn-info nav-item mx-2" href="{{ url('/producto/'.$prod->id.'/edit') }}">EDITAR</a>
                        <div class="mx-2 nav-item">

                        
                            <form action="{{ url('/producto/'. $prod->id)  }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </div>
                    </div>
                    
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
</div>