

<form action="{{ url('/producto') }}" method="post">
    @csrf
    <div class="p-2 container">
        @include('producto.form')
    </div>
    
</form>