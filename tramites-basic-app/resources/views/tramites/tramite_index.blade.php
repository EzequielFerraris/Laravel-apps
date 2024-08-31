<x-layout>

    <div>
        <h1>Tramites</h1>
    </div>

    <div>
        <a href="{{ route('tramites.home') }}">Volver</a>
    </div>
    
    <div>
    @foreach ($tramites as $tramite)
        <h2><a href="{{ route('tramites.show', $tramite->id) }}"> {{ $tramite->nombre }} </a></h2>
        <p>{{ $tramite->descripcion }}</p> 
        <p>Tipo: {{ $tramite->tipo->nombre }}</p> 
        <p>Sector: {{ $tramite->sector->nombre }}</p>  
        
    @endforeach
    </div>
    
    <div>{{ $tramites->links('vendor.pagination.simple-tailwind')}}</div>
    

</x-layout>