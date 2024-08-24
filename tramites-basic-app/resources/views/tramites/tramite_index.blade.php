<x-layout>

    <div>
        <h1>Tramites</h1>
    </div>

    <div>
        <a href="{{ route('tramite_home') }}">Volver</a>
    </div>
    
    <div>
    @foreach ($tramites as $tramite)
        <h2><a href="{{ route('tramites.show', $tramite->id) }}"> {{ $tramite->nombre }} </a></h2>
        <p>{{ $tramite->descripcion }}</p> 
        <p>Tipo: {{ $tramite->tipo->nombre }}</p> 
        <p>Sector: {{ $tramite->sector->nombre }}</p>  
        
        <ul>
        @foreach ($tramite->requisitos as $r)
            <li>{{ $r->nombre }}</li>
        @endforeach
        </ul>
        
    @endforeach
    </div>
    
    <div>{{ $tramites->links('vendor.pagination.simple-tailwind')}}</div>
    

</x-layout>