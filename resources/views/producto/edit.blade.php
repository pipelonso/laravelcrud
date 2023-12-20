<form action="{{ url('/producto/'.$producto->id) }}" method="post">
    @csrf
    @include('producto.bs5')
    {{ method_field('PATCH') }}
    <div class="container p-2">
        @include('producto.form')
    </div>
    
</form>